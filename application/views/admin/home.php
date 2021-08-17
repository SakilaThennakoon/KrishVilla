
                       <!-- DataTales Example -->
                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTable of Products</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="50%"  cellspacing="0">
                                    <thead>
                                        <tr style="height:20px">
                                            <th >Product Name</th>
                                            <th>Selling Price (Rs)</th>
                                            <th>Available Stock (Kg)</th>
                                            <th>Expire Date</th>
                                            <th>Remark</th>
                                            <th>Category Code</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody >

                                        <?php
                                        
                                        foreach($details as $items){ ?>
                                            <?php   echo "<td>" .$items['name']. "</td>";
                                            echo "<td >" .$items['price']. "</td>";
                                            echo "<td>" .$items['qty']. "</td>";
                                            
                                            echo "<td>" .$items['ExpireDate']. "</td>";
                                            echo "<td>" .$items['description']. "</td>";
                                            echo "<td>" .$items['category_id']. "</td>";
                                            
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

<!-- --------------------------------------------------------------------------------------------------------------------- -->
