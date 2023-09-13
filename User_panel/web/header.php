        <header>
		
		<?php
			if(isset($_SESSION['user']))
			{	
				echo " / Welcome.. ". $_SESSION['user'];
			}
			?>
			
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index">
				<span class="fab fa-osi"></span>  Inwardly
                </a></h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="tel_container">
				<a href="" style="float:left">
				<?php
				if(isset($_SESSION['name']))
				{	
					echo " / Welcome.. ". $_SESSION['name'];
				}
				?>
				</a> 
			  </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active cool">
                                <a class="nav-link" href="index">Home
							<span class="sr-only">(current)</span>
						</a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="about">About</a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="services">Services</a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="gallery">Gallery</a>
                            </li>
                            <li class="nav-item dropdown cool">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Blog
						</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog">Blog Page</a>
                                    <a class="dropdown-item" href="single">Single page</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="404">404</a>
                                </div>
                            </li>

                            <li class="nav-item cool">
                                <a class="nav-link" href="contact">Contact</a>
                            </li>
							<li class="nav-item cool">
                                <a class="nav-link" href="login">Login</a>
                            </li>
							
                            <!-- /search -->
                            <li class="search">
                                <div class="cd-main-header">
                                    <ul class="cd-header">
                                        <li>
                                            <a class="cd-search-trigger" href="#">
                                                    <span></span>
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="cd-search" class="cd-search">
                                    <form action="#" method="post">
                                        <input name="Search" type="search" placeholder="Click enter after typing...">
                                    </form>
									  <div class="login_btn-contanier ml-0 ml-lg-5">
										<?php
										if(isset($_SESSION['uid']))
										{	
										?>	
										<a href="pofile">
										  <img src="image.png" alt="">
										  <span>
											My Account  
										  </span>
										</a>
										<a href="logout">
										  <img src="images1.png" alt="">
										  <span>
										   Logout
										  </span>
										</a>
										<?php
										}
										else
										{
										?>	
										<a href="login">
										  <img src="images3.png" alt="">
										  <span>
											Login
										  </span>
										</a>
										<?php
										}
										?>
								</div>
                            </li>

                            <!-- /search -->

                        </ul>


                    </div>
                </nav>
            </div>
        </header>