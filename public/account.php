<?php
  session_start();
  $profilePicture = isset($_SESSION['profilePicture']) ? $_SESSION['profilePicture'] : 'assets/images/default-profile-picture.jpg';
  $mobileNumber = isset($_SESSION['mobileNumber']) ? $_SESSION['mobileNumber'] : '+251....';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Example@gmail.com';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Account</title>
  <!-- icons google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/account.css">
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid d-flex align-items-center">
      <a class="navbar-brand me-auto" href="#">
        <img src="assets/images/alibaba-logo.png" alt="Alibaba-Logo" width="200px">
      </a>


      <div class="ms-auto d-flex align-items-center">
        <div class="nav-item dropdown me-3">
          <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown-hover" aria-expanded="false">
            <img src="<?php echo $profilePicture; ?>" class="profile-photo" alt="pp">

          </a>
          <ul class="dropdown-menu pp-drop">
            <div style="display: flex; flex-direction: row;">
              <img src="<?php echo $profilePicture; ?>" style="
                                  width: 45px;
                                  height: 45px;
                                  border-radius: 50%;
                                  margin: 8px 5px 5px 18px;
                            ">
              <div style="display: flex; flex-direction: column; justify-content: center; margin-left: 10px;">

                <div>
                  Hello naol
                </div>
                <div>
                  <a href="">My Account &nbsp;</a> <a href="">Signout</a>
                </div>
              </div>

            </div>
            <hr style="margin: 7px 0 0 0;">
            <div>
              <span class="material-symbols-outlined" style="margin-right: 5px;
                                       position: relative;
                                        top: 7px; left: 8px;
                                        font-size: 22px;">
                notifications
              </span> notice
            </div>
          </ul>
        </div>


        <div class="ms-auto d-flex align-items-center">
          <div class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle help" href="#" role="button" data-bs-toggle="dropdown-hover" aria-expanded="false">
              Help
            </a>
            <ul class="dropdown-menu drop-div">
              <li><a class="dropdown-item" href="#">Help Center</a></li>
              <li><a class="dropdown-item" href="#">Report</a></li>
              <li><a class="dropdown-item" href="#">Learing center</a></li>

            </ul>
          </div>

          <div class="nav-item dropdown">
            <button class="btn btn-outline-success dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown-hover" aria-expanded="false">
              English
            </button>
            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
              <li><a class="dropdown-item" href="#">Chinese</a></li>
              <li><a class="dropdown-item" href="#">Italian</a></li>
            </ul>
          </div>
        </div>
      </div>
  </nav>

  <!-- body -->

  <div class="container-center">
    <!-- upper -->
    <div class="upper">

      <div class="left">
        <img src="<?php echo $profilePicture; ?>" class="upload-photo-img" alt="" width="10px" >

        <form action="../src/controller/accountController.php" method="POST" enctype="multipart/form-data">

          <p style="text-align: center;">
            <input type="file" name="profilePicture" accept="image/*" onchange="this.form.submit()">
            <?php

            if (isset($_SESSION['error'])) {
              echo $_SESSION['error'];
              unset($_SESSION['error']);
            }
            ?>

          </p>
        </form>

      </div>


      <div class="vl"></div>

      <div class="right">
        <p> <span style="font-weight: 500; color: rgb(151, 147, 147);">Your member ID:</span>&nbsp;&nbsp;&nbsp; et190033000jwjw</p>
        <p style="display: inline-block; "><span style="font-weight: 500; color: rgb(151, 147, 147);">Email:&nbsp;&nbsp; <?php echo $email; ?></span> <a style="margin-left: 0px;">  </a> </p>
        <p style="display: inline-block; "> <a href="" style="color: rgb(22, 119, 193);">Change Email Adress</a></p>
        <p> <span style="font-weight: 500; color: rgb(151, 147, 147);">Linked mobile :&nbsp;&nbsp; <?php echo $mobileNumber; ?> </span> <a href="" style="margin-left: 18px; color: rgb(22, 119, 193);">Enter Mobile Number</a></p>
      </div>
    </div>

    <hr class="mid-line">
    <!-- lower -->
    <div class="lower">
      <div>
        <ul style="list-style-type: none;">
          <li style="font-weight: 500; color: rgb(151, 147, 147);">Personal information</li>
          <hr class="botttom-line">
          <li>My profile</li>
          <li>Member profile</li>
          <li>Upload my photo</li>
          <li>Privacy settings</li>
          <li>Email preferences</li>
          <li>Tax Information</li>
        </ul>
      </div>
      <div>
        <ul style="list-style-type: none;">
          <li style="font-weight: 500; color: rgb(151, 147, 147);">Account Security</li>
          <hr class="botttom-line">
          <li>Change email address</li>
          <li>Change Password</li>
          <li>Set security questions</li>
          <li> Manage Verification Phones</li>
          <li>Manage My Connected Accounts</li>

        </ul>

      </div>
      <div>

        <ul style="list-style-type: none;">
          <li style="font-weight: 500; color: rgb(151, 147, 147);">Fininice Account</li>
          <hr class="botttom-line">
          <li>My transactions</li>

        </ul>
      </div>
    </div>

  </div>

  <!-- footer -->
  <hr class="last-line">
  <p style="text-align: center; color: gray; font-size: 10px;">Product Listing Policy - Intellectual Property Policy and Infringement Claims - Privacy Policy - Terms of Use</p>
  <p style="text-align: center; color: gray; font-size: 14px">© 1999-2014 Alibaba.com. All rights reserved.</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>