<h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url(); ?>index.php/login/authenticate" method="post">
                            <h3 class="text-center " style="color: #82ae46;">Login</h3>
                            <div class="form-group">
                                <label for="username" >Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" ><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url(); ?>index.php/login/register" >Register here</a>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url(); ?>index.php/login/farmer_register" >Farmer Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
        <section class="ftco-section testimony-section">
            <div class="container">
              <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our satisfied customer says</h2>
                  <p>That's a good choice...</p>
                </div>
              </div>
          </section>  