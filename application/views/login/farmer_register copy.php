<div class="container" style="padding-top: 20px;">
    <h3  style="text-align: center; color: #82ae46;">Farmer Register</h3>  
    <form id="farmerRegister" name="farmerRegister" method="post" action="<?php echo base_url(); ?>index.php/login/save_farmer"
    class="row justify-content-center align-items-center">
        
        <div class="col-5">
            <label for="inputfarmName" class="form-label">Name of Farm</label>
            <input id="farmName" name="farmName" type="text" class="form-control form-control-sm">
          </div>
        <div class="col-5">
            <label for="inputfarmerName" class="form-label">Main Farmer's Name</label>
            <input id="farmerName" name="farmerName" type="text" class="form-control form-control-sm">
        </div>
        <div class="col-10">
          <label for="inputfarmAddress" class="form-label">Address of the Farm</label>
          <input id="addressofFarm" name="addressofFarm" type="text" class="form-control">
        </div>
        <div class="col-3">
          <label for="inputfarmArea" class="form-label">Area of the Farm (in Perches)</label>
          <input id="areaofFarm" name="areaofFarm" type="number" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">City</label>
          <input id="inputCity" name="inputCity" type="text" class="form-control" >
        </div>
        <div class="col-md-4">
          <label for="inputCrops" class="form-label">List of crop the a farm wish to grow and sell</label>
          <input id="inputCrops" name="inputCrops" type="text" class="form-control" >
        </div>
        <div class="col-md-3">
          <label for="inputmobileNumber" class="form-label">Mobile Number(WhatsApp)</label>
          <input id="mobileNumber" name="imobileNumber" type="number" class="form-control" >
        </div>
        <div class="col-md-4">
          <label for="inputeMail" class="form-label">Email</label>
          <input id="eMail" name="eMail" type="email" class="form-control">
          <input id="userRole" name="userRole" type="hidden" value="farmer">
        </div>
        <div class="col-md-3">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="upload" name="upload">
      </div>
        <div class="col-md-5">
          <label for="inputpassWord" class="form-label">Password</label>
          <input id="passWord" name="passWord" type="password" class="form-control">
        </div>
        <div class="col-md-5">
          <label for="inputreconfirmPassword4" class="form-label">Reconfirm Password</label>
          <input id="reconfirmpassWord" name="reconfirmpassWord" type="password" class="form-control">
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
          <button id="subMit" name="subMit" type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
</div>