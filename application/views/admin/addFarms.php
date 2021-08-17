
<div class="container" style="padding-top: 20px;">
    <h4  style="text-align: center; color: #82ae46;">Add New Products </h4>
</div>

<form id="itemForm" method="post" action="<?php echo base_url(); ?>index.php/admin/saveItems"  class="align-items-center" style="padding-top: 50px;">
    <div class="container-fluid padding dish-card" >
        <div class="row" >
            <div class="col-xl-2 " >
                <div class="form-group">
                    <label  for="exampleFormControlSelect1">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option>Please Select Category</option>
                            <?php
                
                            foreach ($allCategory as $category){
                                $id = $category['id'];
                                echo "done";
                                echo "<option value='$id'  onClick='getItems($id)'>".$category['name']."</option>";
                            } ?>
                    </select>
                </div>
            </div>
           
            <div class="col-xl-3 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Enter product name</label>
                <input id="productName" name="productName" class="form-control" type="text">
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Quantity (Kg)</label>
                <input id="quantity" name="quantity" class="form-control" type="text">
                </div>
            </div>

            <div class="col-xl-2 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Selling price (Rs)</label>
                <input id="sellPrice" name="sellPrice" class="form-control" type="text">
                </div>
            </div>

            <div class="col-xl-3 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Expire date</label>
                <input id="expire" name="expire" class="form-control" type="date">
                </div>
            </div>

            <div class="col-xl-4 ">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Description</label>
                <input id="description" name="description" class="form-control" type="text">
                </div>
            </div>
            </div>
            <div class="col-xl-2 ">
                <button type="submit" id="sumbitBtn" name="sumbitBtn" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form> 

<script>

    $(document).ready(function(){
        // alert("Hooo");
        $("#category").change(function(e){
            // console.log(e.target.value);
            var $dropdown = $("#productName");
            $dropdown.empty();
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/admin/category/' + e.target.value,
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

  

</script>