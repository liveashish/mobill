<?php
$vendorcode=$_SESSION['login_user'];

include("../../settings/db.php");
$sql=mysql_query("SELECT * FROM `client` WHERE `client_email`='$vendorcode'");
$row=mysql_fetch_array($sql);
$name=$row['client_name'];
$last_login=$row['client_last_log'];
?>
<!-- Top navbar -->
		<div class="navbar main hidden-print">
			
			<!-- Menu Toggle Button -->
			<button type="button" class="btn btn-navbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<!-- // Menu Toggle Button END -->
			
			<!-- Not Blank page -->
						
			<!-- Full Top Style -->
						<ul class="topnav pull-left">
				<li class="active"><a href="index.php" class="glyphicons dashboard"><i></i> Dashboard</a></li>
				
				
				
				<li class="search open hidden-phone hidden-tablet">
					<form autocomplete="off" class="dropdown dd-1">
						<input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
						<button type="button" class="glyphicons search"><i></i></button>
					</form>
				</li>
			</ul>
						<!-- // Full Top Style END -->
			
			<!-- Quick Top Style -->
						<!-- // Quick Top Style END -->
			
						<!-- // Not Blank Page END -->
			
						
						<!-- Top Menu Right -->
			<ul class="topnav pull-right hidden-phone hidden-tablet hidden-desktop-1">
			
								<!-- Themer -->
				<li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
				<!-- // Themer END -->
								
				<!-- Language menu -->
				<li class="hidden-tablet hidden-phone hidden-desktop-1 dropdown dd-1 dd-flags" id="lang_nav">
					<a href="logout.php" data-toggle="dropdown">Logout</a>
			    	
				</li>
				<!-- // Language menu END -->
			
				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1">
										<a data-toggle="dropdown" href="#" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1"><?php echo $name; ?></span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#" class="glyphicons cogwheel">Settings<i></i></a></li>
						<li><a href="#" class="glyphicons camera">My Photos<i></i></a></li>
						<li class="profile">
							<span>
								<span class="heading">Profile <a href="#" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="#">Admin</a>
									admin@vms.com
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="logout.php">Sign Out</a>
							</span>
						</li>
					</ul>
									</li>
				<!-- // Profile / Logout menu END -->
				
			</ul>
			<!-- // Top Menu Right END -->
						<div class="clearfix"></div>
			
		</div>
		<!-- Top navbar END -->