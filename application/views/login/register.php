<!doctype html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Ajax File Upload with jQuery and PHP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="container" style="padding-top: 20px;">
    <h3  style="text-align: center; color: #82ae46;">Customer Register</h3>  

    <form method="post" action="" enctype="multipart/form-data" id="myform">
          <div class='preview'>
            <label for="inputImage" class="form-label">Profile Photo</label>
              <img src="" id="img" width="100" height="100">
          </div>
          <div >
              <input type="file" id="file" name="file" accept=".jpg">
              <input type="button" class="button" value="Upload" id="but_upload">
          </div>
      </form>
      
    <form class="row g-3">
        <div class="col-12">
            <label for="inputfullName" class="form-label">Full Name</label>
            <input id="fullName" name="fullName" type="text" class="form-control form-control-sm">
          </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address of Delivery</label>
          <input id="addressofDelivery" name="addressofDelivery" type="text" class="form-control">
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">City</label>
          <input id="inputCity" name="inputCity" type="text" class="form-control" >
        </div>
        <div class="col-md-12">
          <label for="inputmobileNumber" class="form-label">Mobile Number</label>
          <input id="mobileNumber" name="imobileNumber" type="number" class="form-control" >
        </div>
        <div class="col-md-12">
          <label for="inputeMail" class="form-label">Email</label>
          <input id="eMail" name="eMail" type="email" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="inputpassWord" class="form-label">Password</label>
          <input id="passWord" name="passWord" type="password" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="inputreconfirmPassword4" class="form-label">Reconfirm Password</label>
          <input id="reconfirmpassWord" name="reconfirmpassWord" type="password" class="form-control">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button id="subMit" name="subMit" type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
</div>
</body>