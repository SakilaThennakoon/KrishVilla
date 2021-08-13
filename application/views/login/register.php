<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Stylish Login Page Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>source/assets/images/fav.jpg">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/assets/css/style.css" />
    <script src="<?php echo base_url(); ?>source/assets/js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row ">
                
                <div class="col-sm-10 login-box">
                    <div class="row">
                       <div class="col-lg-4 col-md-5 box-de">
                            <div class="small-logo">
                                <i class="fab fa-asymmetrik"></i> Krish Villa Login
                            </div>

                                <div class="ditk-inf sup-oi">
                                    <h2 class="w-100">Already Have an Account </h2>
                                    <p>Simply login to your account by clicking the login Button</p>
                                    <a href="<?php echo base_url(); ?>index.php/login/index">
                                        <button type="button" class="btn btn-outline-light">SIGN IN</button>
                                    </a>
                                </div>

                            </div>

                                <div class="col-lg-8 col-md-7 log-det">
                                    
                                    <h2>Create Account</h2>
                                    <div class="row">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                </div>
                        
                            <div class="row">
                                <p class="small-info"></p>
                            </div>

                            
                            <div class="text-box-cont">
                            <!-- <form id="userRegister" name="userRegister" method="post" action="index.php/login/save_user"> -->
                            <form id="userRegister" name="userRegister" >
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-inbox"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                </div>


                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="Street Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="streetAddress1" name="streetAddress1" placeholder="Street Address 2" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-address-book"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="Province" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number" aria-label="mobile" aria-describedby="basic-addon1">
                                </div>


                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                               
                                <div class="input-group center sup mb-3">
                                    <input type="button" class="btn btn-success btn-round" id="submit" name="submit" value="SIGN UP" />
                                </div>  
                                </form>  
                            </div>
                           


                        </div>
                       
                 </div>
                </div>
            </div>
        </div>
    </div>
</body>



<!-- <script>

$(document).ready(function(){
            $("#sumbit").click(function(){
               $.ajax({
                   url: base_url  + '/index.php/login/saveUser',
                   data: $("#userRegister").serialize(),
                   method: 'post',
                   dataType: 'json',
                   success: function(response){
                    console.log(response);
                       if( response){
                          Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'User Registered',
                            }).then(function(event){
                               if(event.isConfirmed){
                                   window.location = base_url + "/index.php/login/index";
                               }
                            });
                       }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong',
                            // footer: '<a href="">Why do I have this issue?</a>'
                            })
                       }
                    
                   }
               });
            });
        });


</script>    -->




<script>
        $(document).ready(function(){
            $("#submit").click(function(){
            console.log($('#userRegister').serialize());
            $.ajax({
                url: 'http://localhost/KrishVilla/index.php/login/save_user',
                   data: $("#userRegister").serialize(),
                   method: 'post',
                   dataType: 'json',
                   success: function(response){
                       console.log(response);
                   }
            });
            });
        });
    </script>





</html>
s