<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Product</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>product_id</th>
                                            <th>products_name</th>
                                            <th>Discount_price</th>
                                            <th>Main_price</th>
                                             <th>Description</th>
                                              <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($data_product))
									{
										foreach($data_product as $c)
										{
									?>
                                        <tr>
                                            <td><?php echo $c->Product_id;?></td>
                                            <td><?php echo $c->products_name;?></td>
											<td><?php echo $c->Discount_price;?></td>
											<td><?php echo $c->Main_price;?></td>
											<td><img src="/upload/product/<?php echo $c->file;?>" height="50px" width="50px"></td>
											<td><?php echo $c->Description;?></td>
                                            <td>
												<a href="" class="btn btn-success me-1">Add</a>
 											    <a href="" class="btn btn-danger me-1">Edit</a>
                                                <a href="" class="btn btn-primary me-1">Delete</a>
                                          </td>
                                        </tr>
                                       <?php
										}
								     }
									 else
									 {
									 ?>
                                          <tr>
                                                <td> DATA NO FOUND</td>	
                                     <?php
									 }
                                     ?>	
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>