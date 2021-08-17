
<div class="container" style="padding-top: 20px;">
    <h4  style="text-align: center; color: #82ae46;">Select Vegitables </h4>
</div>

<form id="itemForm" class="align-items-center" style="padding-top: 50px;">
    <div class="container-fluid padding dish-card" >
        <div class="row" >
            <div class="col-xl-3 " >
                <div class="form-group">
                    <label  for="exampleFormControlSelect1">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option>Please Select Category</option>
                            <?php
                
                            foreach ($categoryList as $category){
                                $id = $category['id'];
                                echo "done";
                                echo "<option value='$id'  onClick='getItems($id)'>".$category['name']."</option>";
                            } ?>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 ">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Items</label>
                    <select  id="itemName" name="itemName" class="form-control">
                    <option>Please Select Items</option>

                    </select>
                </div>
            </div>

            
            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Price</label>
                <input id="price" class="form-control" readonly="true" type="text" placeholder="ruppes">
                </div>
            </div>

            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Quantity</label>
                <input id="quantity" name="quantity" class="form-control" type="text" placeholder="kg">
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Total</label>
                <input id="total" name="total" class="form-control" readonly="true" type="text" placeholder="ruppes">
                </div>
            </div>
            </div>
            <div class="col-xl-2 ">
                <button type="button" id="sumbitBtn" name="sumbitBtn" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</form> 

<!-- ---------------------------------------- Second form data ---------------------------------------------------------- -->


<div class="container" style="padding-top: 20px;">
    <h4  style="text-align: center; color: #82ae46;">Select Fruits </h4>
</div>


<form class="align-items-center" style="padding-top: 50px;" id="itemForm1" name="itemForm1" >
    <div class="container-fluid padding dish-card">
        <div class="row">
            <div class="col-xl-3 ">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select id="category1" name="category1" class="form-control">
                        <option>Please Select Category</option>
                            <?php
                
                            foreach ($categoryList as $category){
                                $id = $category['id'];
                                $name = $category['name'];

                                echo "<option value='$id'  onClick='getItems($id)'>".$category['name']."</option>";
                                var_dump($name);
                            } ?>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 ">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Items</label>
                    <select  id="itemName1" name="itemName1" class="form-control">
                    <option>Please Select Items</option>

                    </select>
                </div>
            </div>

            
            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Price</label>
                <input id="price1" class="form-control" readonly="true" type="text" placeholder="Rs">
                </div>
            </div>

            <div class="col-xl-1 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Quantity</label>
                <input id="quantity1" name="quantity1" class="form-control" type="text" placeholder="KG">
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Total</label>
                <input id="total1" name="total1" class="form-control" readonly="true" type="text" >
                </div>
            </div>
            </div>
            <div class="col-xl-2 ">
                <button type="submit" id="sumbitBtn1" name="sumbitBtn1" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</form> 
   
<!-- Content Row -->
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
            // var $dropdown = $('#itemName');
            // $dropdown.empty();
            // $("#price").val('');
            // $.ajax({
            //     url: 'http://localhost/krishvill/index.php/cart/getItems/' + e.target.value,
            //     method : 'get',
            //     datatype : 'json',
            //     success : function(response){
            //         console.log(JSON.parse(response));
            //     //     const itemList = JSON.parse(response);
            //     //     $dropdown.append('<option>Please Select Items</option>');
            //     //     itemList.map(function(selectCategory){
            //     //         $dropdown.append($("<option />").val(selectCategory.itemCode).text(selectCategory.itemName));
            //     //     })
            //     // }
            });

        })



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

<script>

$(document).ready(function(){
        // alert("Hooo");
        $("#category1").change(function(e){
            // console.log(e.target.value);
            var $dropdown = $("#itemName1");
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



        $("#itemName1").change(function(e){
            // console.log($e.target.value);
            var $dropdown = $('#price1');
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
                        $("#price1").val(selectItem.price);
                    })
                }
            });
        });



        $('#quantity1').keyup(function(e){
            console.log(e.target.value);
            const itemPrice = $("#price1").val();
            const itemQuantity = e.target.value;

            const total = itemPrice * itemQuantity;
            // console.log(total);
            $('#total1').val(parseFloat(total).toFixed(2));
        })


        $('#sumbitBtn1').click(function(e){
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/cart/saveItems/' + e.target.value,
                method : 'post',
                data: $('#itemForm1').serialize(),
                datatype : 'json',
                success : function(response){
                    const saveItemStatus = JSON.parse(response);
                    console.log(saveItemStatus);
                }
            });
        });
  

</script>


