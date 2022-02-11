<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=required="required">
  <meta name="author" content=required="required">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

  <title>They Still Alive</title>
  <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">
  <script>
      <?php
      $do = isset($_GET['status']) ? $_GET['status'] : '';
      if($do == 'success')
      {
        echo 'alert("Done\nData had been Stored\n");';
      }
      elseif($do == 'fail')
      {
        echo 'alert("Error\nData had not been Stored\nPlease,Check your Data again\n");';
      }
      ?>
  </script>

</head>

<body>
  <section class="section colored" id="contact-us">
    <div class="container">
      <!-- ***** Section Title Start ***** -->
      <div class="row">
        <div class="col-lg-12">
          <div class="center-heading">
            <h2 class="section-title">Genrarl informations</h2>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-6">
          <div class="center-text">

          </div>
        </div>
      </div>
      <!-- ***** Section Title End ***** -->

      <form action="insert.php" method="post" enctype="multipart/form-data" id="form">
        <div class="form-group row">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">First and last name</span>
            </div>
            <input type="text" aria-label="First name" id="FirstName" name="FirstName" class="form-control" required="required">
            <input type="text" aria-label="Last name" id="LastName" name="LastName" class="form-control" required="required">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Gender</label>
              <select name="gender" class="form-control" required="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Social Condition</label>
              <select name="socialCondition" class="form-control" required="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Date of Birth</legend>
            <div class="col-sm-10">
              <input class="form-control" type="date" id="dateOfBirth" name="dateOfBirth" required="required">
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Date of getting Symptoms</legend>
            <div class="col-sm-10">
              <input class="form-control" type="date" id="dateOfgettingSymptoms" name="dateOfgettingSymptoms" required="required">
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Date of Death</legend>
            <div class="col-sm-10">
              <input class="form-control" type="date" id="dateOfDeath" name="dateOfDeath" required="required">
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Describe the symptoms</legend>
            <div class="col-lg-12">
              <textarea name="Symptoms" rows="6" class="form-control" id="Symptoms" name="Symptoms" required="required"></textarea>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Country and State</span>
            </div>
            <input type="text" aria-label="Country" id="Country" name="Country" class="form-control" required="required">
            <input type="text" aria-label="State" id="State" name="State" class="form-control" required="required">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Photo</legend>
            <div class="col-sm-10">
              <input class="form-control" type="file" accept="image/*" id="photo" required="required" name="photo">
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" name="save" value="Submit">
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- ***** Contact Us End ***** -->

  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="copyright">Copyright &copy; 2021 They Still Alive</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

</body>

</html>