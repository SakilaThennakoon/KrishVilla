<link rel="stylesheet" href="<?php echo base_url('assets/css/profile.css');?>">
<div class="row">
    <div class="col-md-6">
        <div class="wrapper mt-sm-5">

            <form  action="<php echo base_url().'profile/edit/'.$loggedUser['user_id']?>" method="POST" class="row justify-content-center align-items-center">
                <h4 class="pb-4 border-bottom">Account details</h4>
                <div class="py-2">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text"
                                class="bg-light form-control"
                                name="firstname" readonly="true" value="<?php if(isset($_SESSION['logged_user'])){
					echo ($_SESSION['logged_user']);
					}else{
						echo "Login";
					}?>">
                          
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text"
                                class="bg-light form-control"
                                name="lastname" readonly="true" value="<?php if(isset($_SESSION['last_name'])){
					echo ($_SESSION['last_name']);
					}else{
						echo "Login";
					}?>">
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">Email Address</label>
                            <input type="text"
                                class="bg-light form-control"
                                name="email" readonly="true" value="<?php if(isset($_SESSION['Email'])){
					echo ($_SESSION['Email']);
					}else{
						echo "Login";
					}?>">
                           
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Contact Number</label>
                            <input type="tel"
                                class="bg-light form-control"
                                name="phone" readonly="true" value="<?php if(isset($_SESSION['Mobile'])){
					echo ($_SESSION['Mobile']);
					}else{
						echo "Login";
					}?>">
                          
                        </div>
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <textarea name="address" type="text" readonly="true" style="height:70px;"
                            class="bg-light form-control"><?php if(isset($_SESSION['Address'])){
					echo ($_SESSION['Address']);
					}else{
						echo "Login";
					}?></textarea>
                        
                    </div>
                    <!-- <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn btn-primary mr-3">Save Changes</button>
                        <a href="#" class="btn border button">Cancel</a>
                    </div> -->
                </div>
            </form>
        </div>
    </div>

