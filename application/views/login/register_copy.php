<div class="container" style="padding-top: 20px;">
    <h3  style="text-align: center; color: #82ae46;">Cust Register</h3>  
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
          <label for="inputCity" class="form-label">City</label>
          <input id="inputCity" name="inputCity" type="text" class="form-control" >
        </div>
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
          <label for="exampleFormControlFile1">Example file</label>
          <input id="#" name="#" type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
        <div class="col-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
          <div>
          <?php echo form_open_multipart('login/save_farmer');?>
            <input type="file" name="upload" size="20" />
            <input id="submit" name="submit" type="submit" value="upload" />

            </form>
          </div>

        <div class="col-10">
          <button id="submit" name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
        
      </form>
</div>

<?php echo form_open_multipart('login/imageUpload');?>
<input type="file" name="upload" size="20" />
<input type="submit" value="upload" />

</form>

<!-- <script>

$("#submit").click(function(){
          alert('done');
          
          var fd = new FormData();
        var files = $('#upload')[0].files;
        
        // Check file selected or not
          if(files.length > 0 ){
           fd.append('file',files[0]);
          }
           

          //  const data = $("#farmerRegister").serialize();

          //  dataset = {
          //    'formData' : $("#farmerRegister").serialize(),
          //    'fileUpload' : files
          //  }

          //  console.log(files);
           

           $.ajax({
            url: '<php echo base_url(); ?>index.php/login/save_user',
            method: 'post',
            data: fd,
            processData: false,
            dataType: 'json',

            success:function(response){
              const saveitemStatus = JSON.parse(response);
                   console.log(saveitemStatus);
            }
        });
});
  
   </script> -->

<!-- <script> -->

<!-- $("#submit").click(function(){
        alert('done');
        var fd = new FormData();
        var files = $('#upload')[0].files;
        console.log(files);
           $.ajax({
               url: '< echo base_url(); ?>index.php/login/save_user',
               method: 'post',
               data: $("#farmerRegister").serialize(),
               dataType: 'json',
               success:function(response){
                   const saveitemStatus = JSON.parse(response);
                   console.log(saveitemStatus);
               }
           });
       });
   }) -->

   <!-- </script> -->