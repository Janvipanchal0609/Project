<?php include_once('header.php')?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Product</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        Add Product 
                        </div>
                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>products_name</label>
                                            <input class="form-control" name="products_name" type="text">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Discount_price</label>
                                            <input class="form-control" name="Discount_price" type="number">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Main_price</label>
                                            <input class="form-control" name="Main_price" type="number">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Product_image</label>
                                            <input class="form-control" name="file" type="file">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" name="Description" type="text">
                                        </div>
                                            
                                  
                                 
                                        <button type="submit" name="submit" class="btn btn-info">Submit </button>

                                    </form>
                            </div>
                        </div>
                            </div>
                            <?php include_once('footer.php')?>