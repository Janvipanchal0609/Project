<?php
if(isset($_SESSION['admin']))
{	
	echo "<script> 
		window.location='dashboard';
	</script>";
}	
?>

<!DOCTYPE html>
 <xmlns="http://www.w3.org/1999/">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
            <div class="col-md-12
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-cent">
            <h2 align="center"> Login From </h2>            
		</div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " />
                                        </div>                                  
						                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <a href="dashboard" class="btn btn-primary ">Login Now</a>
                                    <hr />
                                    Not register ? <a href="index" >click here </a> or go to <a href="index">Home</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>