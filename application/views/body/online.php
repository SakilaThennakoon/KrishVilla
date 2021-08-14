
<form id="itemForm">
    <div class="col-xl-3 ">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select id="category" name="category" class="form-control">
            <option>Please Select Category</option>
                    <?php
        
                    foreach ($categoryList as $category){
                        $id = $category['r_id'];
                        echo "done";
                        echo "<option value='$id'  onClick='getItems($id)'>".$category['name']."</option>";
                    }

                    ?>
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

    
    <div class="col-xl-3 ">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Price</label>
        <input id="price" class="form-control" readonly="true" type="text" placeholder="ruppes">
        </div>
    </div>

    <div class="col-xl-3 ">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Quantity</label>
        <input id="quantity" name="quantity" class="form-control" type="text" placeholder="kg">
        </div>
    </div>

    <div class="col-xl-3 ">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Total</label>
        <input id="total" name="total" class="form-control" readonly="true" type="text" placeholder="ruppes">
        </div>
    </div>

    <!-- <div class="col-xl-3 ">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Batch No</label>
        <input id="batch" name="batch" class="form-control" type="text" placeholder="No">
        </div>
    </div>

    <div class="col-xl-3 ">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Expire Date</label>
        <input id="expire" name="expire" class="form-control" type="date" placeholder="kg">
        </div> -->

    </div>

    <div class="col-xl-3 ">
    <button type="button" id="sumbitBtn" name="sumbitBtn" class="btn btn-primary">Sumbit</button>
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
                        $dropdown.append($("<option />").val(selectCategory.d_id).text(selectCategory.name));
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