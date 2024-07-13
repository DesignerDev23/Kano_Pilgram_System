<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="../controllers/PilgrimController.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="pil_name" name="pil_name" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LGA</label>
                    <input type="text" class="form-control" id="pil_lga" name="pil_lga" >
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">NIN:</label>
                    <input type="text" class="form-control" id="pil_nin" name="pil_nin">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">BVN:</label>
                    <input type="text" class="form-control" id="pil_bvn" name="pil_bvn" aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Passport No:</label>
                    <input type="text" class="form-control" id="passport_no" name="passport_no" >
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Gender:</label>
                    <select id="gender" class="form-control" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="pil_nin" name="pil_nin"> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob"  aria-describedby="textHelp" require>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email"  >
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <button type="submit" name="register" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Register</button>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</a> -->
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
