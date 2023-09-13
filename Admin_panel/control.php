<?php
include_once('../User_panel/web/model.php'); //step 1 load model

class control extends model // step 2 extends
{
	//magic function that call automatecally when you declare class object
	  function __construct()
	  {
		session_start();
		
		model::__construct();//step 3 call model__construct
		
		date_default_timezone_set('asia/calcutta');
		
		$url=$_SERVER['PATH_INFO'];
		switch($url)
		{
            case '/index':
			if(isset($_REQUEST['submit']))
			{
				
				$anm=$_REQUEST['anm'];
				$apass=md5($_REQUEST['apass']); // password encrypted
				
				$where=array("anm"=>$anm,"apass"=>$apass);
				
				$res=$this->select_where('admin',$where);
				$chk=$res->num_rows;  // condition res check by rows
				if($chk==1) // 1 means true 
				{
					$_SESSION['admin']=$anm;
					echo "<script> 
						alert('Admin Login Success'); 
						window.location='dashboard';
						</script>";
				}
				else
				{
					echo "<script> 
						alert('Login Failed'); 
					</script>";
				}	
				
			}
				include_once('index.php');
				break;
				
				case '/admin_logout':
				unset($_SESSION['admin']);
				echo "<script> 
							alert('admin Logout Success'); 
							window.location='admin';
						</script>";
				break;
				
				case '/dashboard':
				include_once('dashboard.php');
				break;
			
				case '/add_cus':
				 
				 if(isset($_REQUEST['submit'])){
										
											$name=$_REQUEST['name'];
											$email=$_REQUEST['email'];
											$gender=$_REQUEST['gender'];
											$languages=$_REQUEST['languages'];
											
											//img upload
											$file=$_FILES['file']['name'];
											$path="customers".$file; //path
											$tmp_file=$_FILES['file']['tmp_name'];
											move_uploaded_file($tmp_file,$path);
										   
											$created_at=date("y-m-d H:i:s");
											$updated_at=date("y-m-d H:i:s");

											$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"languages"=>$languages,"created_at"=>$created_at,"updated_at"=>$updated_at);
											

											$res=$this->insert('customers',$arr);
											if($res){
												echo"<script>
												alert('add customers Inquiry Registered Success');
												</script>";
											}
											else{
												echo"<script>
												alert('not added');
												</script>";
											}
										}
				include_once('add_cus.php');
				break;

        case '/add_cate':
		
		     if(isset($_REQUEST['submit'])){
                                
                                    $Categoryname=$_REQUEST['Categoryname'];
									
                                    //img upload
									$file=$_FILES['file']['name'];
									$path="add_category".$file; //path
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
                                   
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");

                                    $arr=array("Categoryname"=>$Categoryname,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                    

                                    $res=$this->insert('add_category',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('add category Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('not added');
                                        </script>";
                                    }
                                }
        include_once('add_cate.php');
        break;

        case '/add_prod':
		
		if(isset($_REQUEST['submit'])){
                           
									$products_name=$_REQUEST['products_name'];
									$Discount_price=$_REQUEST['Discount_price'];
									$Main_price=$_REQUEST['Main_price'];
									$Description=$_REQUEST['Description'];

                                    //img upload
									$file=$_FILES['file']['name'];
									$path="upload/product/".$file; //path
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
									//echo"<pre>";print_r($_FILES);exit;

                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");
                                    $arr=array("products_name"=>$products_name,"Discount_price"=>$Discount_price,"Main_price"=>$Main_price,
									"Description"=>$Description,"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                  
                                    $res=$this->insert('product',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('product Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('not added');
                                        </script>";
                                    }
                                }
        include_once('add_prod.php');
        break;
		
		break;

        case '/add_prod':
		
		if(isset($_REQUEST['submit'])){
                           
									$products_name=$_REQUEST['products_name'];
									$Discount_price=$_REQUEST['Discount_price'];
									$Main_price=$_REQUEST['Main_price'];
									$Description=$_REQUEST['Description'];
									//echo"<pre>";print_r('$_REQUEST');exit;

                                    //img upload
									$file=$_FILES['file']['name'];
									$path="/upload/product/".$file; //path
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
                                   
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");
                                    $arr=array("products_name"=>$products_name,"Discount_price"=>$Discount_price,"Main_price"=>$Main_price,"file"=>$file,
									"file"=>$file,"Description"=>$Description,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                  
                                    $res=$this->insert('product',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('product Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('not added');
                                        </script>";
                                    }
                                }
        include_once('add_prod.php');
        break;
		
		 case '/add_emp':
		
		if(isset($_REQUEST['submit'])){
                           
									$products_name=$_REQUEST['name'];
									$Discount_price=$_REQUEST['username'];
									$Main_price=$_REQUEST['status'];
									//echo"<pre>";print_r('$_REQUEST');exit;

                                    //img upload
									$file=$_FILES['file']['name'];
									$path="/upload/employee/".$file; //path
									$tmp_file=$_FILES['file']['tmp_name'];
									move_uploaded_file($tmp_file,$path);
                                   
                                    $created_at=date("y-m-d H:i:s");
                                    $updated_at=date("y-m-d H:i:s");
                                    $arr=array("name"=>$name,"username"=>$username,"status"=>$status,"file"=>$file,
									"file"=>$file,"created_at"=>$created_at,"updated_at"=>$updated_at);
                                  
                                    $res=$this->insert('employees',$arr);
                                    if($res){
                                        echo"<script>
                                        alert('employee Inquiry Registered Success');
                                        </script>";
                                    }
                                    else{
                                        echo"<script>
                                        alert('not added');
                                        </script>";
                                    }
                                }
        include_once('add_emp.php');
        break;
		
        case '/manage_cate':
		$data_category=$this->select('add_category');
        include_once('manage_cate.php');
        break;
          
        case '/manage_prod':
		$data_product=$this->select('product');
        include_once('manage_prod.php');
        break;
		
		case '/manage_emp':
		$data_customer=$this->select('employees');
        include_once('manage_emp.php');
        break;


		case '/manage_cust':
		$data_customer=$this->select('customers');
        include_once('manage_cust.php');
        break;

		case '/Feedback':
		$data_feedback=$this->select('feedback');
        include_once('Feedback.php');
        break;
		
		case '/manage_cont':
		$data_contacts=$this->select('contacts');
        include_once('manage_cont.php');
        break;
		
		case '/delete':
			
			if(isset($_REQUEST['delcontact_id']))
			{
				$contact_id=$_REQUEST['delcontact_id'];
				
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contacts',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_cont';
					</script>";
				}
			}
			
			if(isset($_REQUEST['deluid']))
			{
				$uid=$_REQUEST['deluid'];
				
				$where=array("uid"=>$uid);
				
				//delete user image 
				$run=$this->select_where('customers',$where);
				$fetch=$run->fetch_object();
				$userfile=$fetch->file;
				
				$res=$this->delete_where('customers',$where);
				if($res)
				{
					unlink('../admin_panel/upload/customers/'.$file);// delete image from folder
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_cust';
					</script>";
				}
				
				
			}
		
			if(isset($_REQUEST['delemp_id']))
			{
				$emp_id=$_REQUEST['delemp_id'];
				
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employees',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_emp';
					</script>";
				}
			}
			
			if(isset($_REQUEST['delfeed_id']))
			{
				$feed_id=$_REQUEST['delfeed_id'];
				
				$where=array("feed_id"=>$feed_id);
				$res=$this->delete_where('feedback',$where);
				if($res)
				{
					echo "<script> 
						alert('Delete Success'); 
						window.location='manage_feed';
					</script>";
				}
			}
			
		
			break;
			case '/status':
			
				if(isset($_REQUEST['statusuid']))
				{
					$uid=$_REQUEST['statusuid'];
					
					$where=array("uid"=>$uid);
					
					//get status  
					$run=$this->select_where('customers',$where);
					$fetch=$run->fetch_object();
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$arr=array("status"=>"Unblock");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Unblock Success'); 
							window.location='manage_cust';
							</script>";
						}						
					}
					else
					{
						$arr=array("status"=>"Block");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							unset($_SESSION['user']);
							unset($_SESSION['name']);
							unset($_SESSION['uid']);
							echo "<script> 
							alert('Block Success'); 
							window.location='manage_cust';
							</script>";
						}		
					}
				}
		break;
			
        default:
        include_once('pagenotfound.php');
        break;
    }
  }
}
$obj=new control;
?>