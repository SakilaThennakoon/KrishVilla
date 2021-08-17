<div class="container" style="padding-top: 20px;">
    <h3  style="text-align: center; color: #82ae46;">Customer Register</h3>  
    <form id="farmerRegister" name="farmerRegister" method="post" action="<?php echo base_url(); ?>index.php/login/save_user"
      class="row justify-content-center align-items-center">
        
        <div class="col-5">
            <label for="inputfullName" class="form-label">First Name</label>
            <input id="firstName" name="firstName" type="text" class="form-control form-control-sm">
          </div>
          <div class="col-5">
            <label for="inputfullName" class="form-label">Last Name</label>
            <input id="lastName" name="lastName" type="text" class="form-control form-control-sm">
          </div>
        <div class="col-10">
          <label for="inputAddress" class="form-label">Address of Delivery</label>
          <input id="addressofDelivery" name="addressofDelivery" type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label  for="inputCity" class="form-label">Near by Farm  </label>

        <select id="inputCity" name="inputCity">
        <option value="Colombo">Colombo</option>
        <option value="Gampaha">Gampaha</option>
        <option value="Nugegoda">Nugegoda</option>
        <option value="Maharagama">Maharagama</option>
        <option value="Pannipitiya">Pannipitiya</option>
        <option value="Kiribathgoda">Kiribathgoda</option>
        <option value="Kaduwela">Kaduwela</option>
        <option value="Lindula">Lindula</option>
        <option value="Talawakale">Talawakale</option>
        <option value="Hatton">Hatton</option>
        <option value="Watawala">Watawala</option>
        <option value="Ginigathhena">Ginigathhena</option>
        <option value="Nuwaraeliya">Nuwaraeliya</option>
        <option value="Bandarawela">Bandarawela</option>
        <option value="Kaluthara">Kaluthara</option>
        <option value="Kaluthara">Bandaragama</option>
        <option value="Horana">Horana</option>
        <option value="Galle">Galle</option>
        <option value="Labuduwa">Labuduwa</option>
        <option value="Hikkaduwa">Hikkaduwa</option>
        </select>


          <!-- <input id="inputCity" name="inputCity" type="text" class="form-control" > -->
        </div>

        <!-- <label for="cars">Choose a car:</label> -->

  

        <div class="col-md-3">
          <label for="inputmobileNumber" class="form-label">Mobile Number(WhatsApp)</label>
          <input id="mobileNumber" name="imobileNumber" type="number" class="form-control" >
        </div>
        <div class="col-md-4">
          <label for="inputeMail" class="form-label">Email</label>
          <input id="email" name="email" type="email" class="form-control">
          <input id="hidden" name="hidden" type="hidden" value="customer">
        </div>
        <div class="col-md-5">
          <label for="inputpassWord" class="form-label">Password</label>
          <input id="passWord" name="passWord" type="password" class="form-control">
        </div>
        <div class="col-md-5">
          <label for="inputreconfirmPassword4" class="form-label">Reconfirm Password</label>
          <input id="reconfirmpassWord" name="reconfirmpassWord" type="password" class="form-control">
        </div>
        <div class="col-md-10">
          <label for="exampleFormControlFile1">Upload profile picture</label>
          <input id="upload" name="upload" type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
        <div class="col-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-10">
          <button id="submit" name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
</div>