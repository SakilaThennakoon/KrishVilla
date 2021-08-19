<div class="container" style="padding-top: 20px;">
    <h3  style="text-align: center; color: #82ae46;">Image Upload</h3>  


         
          <?php echo form_open_multipart('admin/imageUpload');?>

          <input type="file" id="uploadPic" name="uploadPic" size="20" />
        <input id="passWord" name="passWord" type="hidden" value="testone" class="form-control">

<br /><br />

        <input type="submit" value="upload" />

</form>

<!-- 
        <input type="file" id="uploadPic" name="uploadPic" size="20" />
        <input id="passWord" name="passWord" type="hidden" value="testone" class="form-control">
        
        <input type="submit" value="upload" />

        </form> -->

</div>




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