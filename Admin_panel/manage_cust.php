
        <?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
										    <th>Profile</th>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
											<th>gender</th>
											<th>languages</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty($data_customer))
									{
										foreach($data_customer as $c)
										{
									?>
                                        <tr>
										    <td><img src="../admin_panel/upload/customers/<?php echo $d->file;?>" width="50px"></td>
                                            <td><?php echo $c->uid;?></td>
                                            <td><?php echo $c->name;?></td>
                                            <td><?php echo $c->email;?></td>
											<td><?php echo $c->gender;?></td>
											<td><?php echo $c->languages;?></td>
                                            <td>
												<a href="status?statusuid=<?php echo $d->uid;?>" class="btn btn-success me-1"><?php echo $d->status;?></a>
												<a href="delete?deluid=<?php echo $d->uid;?>" class="btn btn-danger me-1">Delete</a>		
												<a href="" class="btn btn-primary me-1">Edit</a>
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