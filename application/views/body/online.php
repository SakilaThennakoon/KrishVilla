
<div class="container" style="padding-top: 20px;">
    <h4  style="text-align: center; color: #82ae46;">Get from here that you want </h4>
</div>

<form id="itemForm" class="align-items-center" style="padding-top: 50px;">
    <div class="container-fluid padding dish-card" >
        <div class="row" >
            <div class="col-xl-2 " >
                <div class="form-group">
                    <label  for="exampleFormControlSelect1">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option>Select Category</option>
                            <?php
                
                            foreach ($categoryList as $category){
                                $id = $category['id'];
                                echo "done";
                                echo "<option value='$id'  onClick='getItems($id)'>".$category['name']."</option>";
                            } ?>
                    </select>
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Item</label>
                    <select  id="itemName" name="itemName" class="form-control">
                    <option>Select Item</option>

                    </select>
                </div>
            </div>


                <input id="user" name="user" class="form-control" readonly="true" type="hidden" value="<?php if(isset($_SESSION['user_id'])){
					echo ($_SESSION['user_id']);
					}else{
						echo "Login";
					}?>" >


            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Price (Rs)</label>
                <input id="price" class="form-control" readonly="true" type="text" >
                </div>
            </div>


                <input id="pro_name" name="pro_name" type="hidden" class="form-control" readonly="true" type="text">


            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Quantity</label>
                <input id="quantity" name="quantity" class="form-control" type="text" placeholder="kg">
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Total (Rs)</label>
                <input id="total" name="total" class="form-control" readonly="true" type="text" >
                </div>
            </div>
            </div>
            <div class="col-xl-2 ">
                <button type="button" id="sumbitBtn" name="sumbitBtn" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</form> </br></br></br></br>


            </div>
        </div>
    </div>
</body>

<script>

    $(document).ready(function(){
        // alert("Hooo");
        $("#category").change(function(e){
            // console.log(e.target.value);
            var $dropdown = $("#itemName");
            $dropdown.empty();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/cart/getItems/' + e.target.value,
                method : 'get',
                datatype : 'json',
                success : function(response){
                    // console.log(JSON.parse(response));
                    const itemList = JSON.parse(response);
                    // var $dropdown = $("#itemName");
                    $dropdown.append('<option>Please Select Items</option>');
                    itemList.map(function(selectCategory){
                        $dropdown.append($("<option />").val(selectCategory.id).text(selectCategory.name));
                    });
                }

            });
        });
    })


    $("#itemName").change(function(e){
            // console.log($e.target.value);
            var $dropdown = $('#pro_name');
            $dropdown.empty();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/cart/getItemName/' + e.target.value,
                method : 'get',
                datatype : 'json',
                success : function(response){
                    const item = JSON.parse(response);
                    // console.log(item,"ssssss");
                    item?.map(function(selectItem,index){
                        // console.log(item,"ssssss");
                        $("#pro_name").val(selectItem.name);
                    })
                }
            });
        });

    





        $("#itemName").change(function(e){
            // console.log($e.target.value);
            var $dropdown = $('#price');
            $dropdown.empty();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/cart/getPrice/' + e.target.value,
                method : 'get',
                datatype : 'json',
                success : function(response){
                    const item = JSON.parse(response);
                    // console.log(item,"ssssss");
                    item?.map(function(selectItem,index){
                        // console.log(item,"ssssss");
                        $("#price").val(selectItem.price);
                    })
                }
            });
        });



        $('#quantity').keyup(function(e){
            console.log(e.target.value);
            const itemPrice = $("#price").val();
            const itemQuantity = e.target.value;

            const total = itemPrice * itemQuantity;
            // console.log(total);
            $('#total').val(parseFloat(total).toFixed(2));
        })

  
  
        $('#sumbitBtn').click(function(e){
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/cart/saveItems/' + e.target.value,
                method : 'post',
                data: $('#itemForm').serialize(),
                datatype : 'json',
                success : function(response){
                    const saveItemStatus = JSON.parse(response);
                    console.log(saveItemStatus);
                }
            });
        });

</script>

<!-- --------------------------------------------- Second Form ---------------------------------------------------- -->


