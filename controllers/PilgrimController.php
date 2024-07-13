<?php
include_once '../config/database.php';
include_once '../models/Pilgrim.php';
include_once '../services/MonnifyService.php';

class PilgrimController {
    private $db;
    private $pilgrim;
    private $monnifyService;

    public function __construct($db) {
        $this->db = $db;
        $this->pilgrim = new Pilgrim($this->db);
        $this->monnifyService = new MonnifyService();
    }

    public function registerPilgrim($postData) {
        $this->pilgrim->pil_name = $postData['pil_name'];
        $this->pilgrim->pil_lga = $postData['pil_lga'];
        $this->pilgrim->pil_nin = $postData['pil_nin'];
        $this->pilgrim->pil_bvn = $postData['pil_bvn'];
        $this->pilgrim->passport_no = $postData['passport_no'];
        $this->pilgrim->gender = $postData['gender'];
        $this->pilgrim->dob = $postData['dob'];
        $this->pilgrim->phone_number = $postData['phone_number'];
        $this->pilgrim->email = $postData['email'];
        $this->pilgrim->password = password_hash($postData['password'], PASSWORD_DEFAULT);

        try {
            // Create reserved account with Monnify
            $this->pilgrim->account_number = $this->monnifyService->createReservedAccount($this->pilgrim);

            // Create pilgrim record
            if ($this->pilgrim->create()) {
                header('Location: ../public/index.php');
            } else {
                echo "Registration failed. Please try again.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

// Example usage
if (isset($_POST['register'])) {
    $database = new Database();
    $db = $database->getConnection();
    $controller = new PilgrimController($db);
    $controller->registerPilgrim($_POST);
}
?>
