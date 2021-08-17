<?php var_dump($addCart); ?>

<script>
function updateCartItem(obj, rowid) {
    $.get("<?php echo base_url().'cart/updateCartItemQty/'; ?>", {
            rowid: rowid,
            qty: obj.value
        },
        function(resp) {
            if (resp == 'ok') {
                location.reload();
            } else {
                alert('Cart update failde, please try again.');
            }
        });
}
</script>
<div class="container">
    <h2>Shopping Cart</h2>
    <div class="table-responsive-sm">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="10%">

                    </th>
                    <th width="10%">Dish</th>
                    <th width="10%">Price</th>
                    <th width="10%">Quantity</th>
                    <th width="10%">SubTotal</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php 
                    foreach($addCart as $item) { ?>
                <tr>
                    <td>
                       
                        
                    </td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo '$'. $item['price']; ?></td>
                    <td><input type="number" class="form-control text-center"
                            onChange="updateCartItem(this, '<?php echo $item['r_id'] ?>')">
                    </td>
                   
                    <td>
                       
                    </td>
                </tr>
                <?php } ?>

            </tbody>
            <tfoot>
                <tr>
                    
                    <td colspan="3"></td>
                  
                    
                </tr>
            </tfoot>
        </table>
    </div>
</div>