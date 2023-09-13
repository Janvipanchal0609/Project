<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">manage_cont</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            manage_cont
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>contact_id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>message</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									if(!empty($data_contacts))
									{
										foreach($data_contacts as $c)
										{
									?>
                                        <tr>
                                            <td><?php echo $c->contact_id;?></td>
                                            <td><?php echo $c->name;?></td>
                                            <td><?php echo $c->email;?></td>
											<td><?php echo $c->message;?></td>
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