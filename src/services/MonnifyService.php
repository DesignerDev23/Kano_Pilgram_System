<?php
class MonnifyService {
    private $baseUrl = "https://sandbox.monnify.com/api/v1/disbursements/wallet";
    private $apiKey = "MK_TEST_67KR3XA58C";
    private $secretKey = "8KB0AUHAHJY8PJSQPVRF99XPM8EQMP5R";

    public function createEwalletAccount($pilgrim) {
        $data = [
            "walletReference" => "ref" . time(),
            "walletName" => "Wallet - " . $pilgrim->pil_name,
            "customerName" => $pilgrim->pil_name,
            "bvnDetails" => [
                "bvn" => $pilgrim->pil_bvn,
                "bvnDateOfBirth" => $pilgrim->dob
            ],
            "customerEmail" => $pilgrim->email
        ];

        $ch = curl_init($this->baseUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode($this->apiKey . ":" . $this->secretKey)
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);
        curl_close($ch);

        $response_data = json_decode($response, true);

        if ($response_data['requestSuccessful']) {
            return $response_data['responseBody']['accountNumber'];
        } else {
            throw new Exception("Failed to create e-wallet account: " . $response_data['responseMessage']);
        }
    }
}
?>
