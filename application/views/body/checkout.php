
                       <!-- DataTales Example -->
                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Dish Code</th>
                                            <th>Quantity</th>
                                            <th>Total (Rs)</th>
                                            
                                            
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        
                                        foreach($buy as $itemsAll){ ?>
                                            <tr>    
                                            <?php   
                                                    
                                                    echo "<td>" .$itemsAll['item_name']. "</td>";
                                                    echo "<td>" .$itemsAll['qty']. "</td>";
                                                    echo "<td>" .$itemsAll['amount']. "</td>";
                                            // echo '<td> <button type="button" id="edit" name="edit" class="btn btn-info">Edit</button>  <button type="button" value="'.$itemsAll['id'].'" id="delete" name="delete'.$itemsAll['id'].'" class="btn btn-danger">X</button></td>';
                                           
                                                    echo "</tr>";
                                        }
                                                                    
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>

   
<!-- Content Row -->
            </div>
        </div>
    </div>
</body>


<script>

            $(document).ready(function(){
                $('#dataTable').DataTable();

            $("[id^=delete]").click(function(e){
                // console.log(e.target.value);
                $.ajax({
                url: 'http://localhost/project/heshan2/index.php/items/deleteItems/' + e.target.value,
                method : 'post',
                data: {id:e.target.value},
                datatype : 'json',
                success : function(response){
                    const deleteItems = JSON.parse(response);
                    console.log(deleteItems);
                    if(deleteItems){
                        window.location = 'http://localhost/project/heshan2/index.php/items/'
                    }
                }
            });
        })    
    });

</script> 


















<!-- <script>

    $(document).ready(function(){
        // alert("Hooo");
        $("#category").change(function(e){
            // console.log($e.target.value);
            var $dropdown = $('#items');
            $dropdown.empty();
            $.ajax({
                url: 'http://localhost/project/heshan2/index.php/items/getCategoryWiseItems/' + e.target.value,
                method : 'get',
                datatype : 'json',
                success : function(response){
                    // console.log(JSON.parse(response));
                    const itemList = JSON.parse(response);
                    itemList.map(function(items){
                        $dropdown.append($("<option />").val(items.itemCode).text(items.itemName));
                    })
                }
            });
        });
    })
</script> -->
