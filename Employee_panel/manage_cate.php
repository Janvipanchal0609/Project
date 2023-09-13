
        <?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Categories</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  --> 
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Categoryname</th>
                                            <th>Categoryimage</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
									if(!empty($data_category))
									{
										foreach($data_category as $c)
										{
									?>
                                        <tr>
                                            <td><?php echo $c->id;?></td>
                                            <td><?php echo $c->Categoryname;?></td>
											<td><img src="upload/add_category/<?php echo $c->file;?>" height="50px" width="50px"></td>
                                            <td>
											     <a href="" class="btn btn-danger me-1">Delete</a>
												 <a href="" class="btn btn-primary me-1">Add</a>
                                                 <a href="" class="btn btn-success me-1">Edit</a>
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