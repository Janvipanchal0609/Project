<?php include_once('header.php')?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Employee</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        Add Employee
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Emp_name</label>
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                 <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" name="status" type="text">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info">Submit </button>

                                    </form>
                            </div>
                        </div>
                            </div>
                            <?php include_once('footer.php')?>