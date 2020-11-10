<!doctype html>
<html class="no-js" lang="">
	<?php require_once('views/include/head.php') ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<?php require_once('views/include/header.php') ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>My Account</h2>
							<ul class="text-left">
								<li><a href="?mod=page&act=home">Home </a></li>
								<li><span> // </span>My Account</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- My account content section start -->
		<section class="pages my-account-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="padding60">
							<div class="log-title">
								<h3><strong>My Account</strong></h3>
							</div>
							<div class="prament-area main-input">
								<ul class="panel-group" id="accordion">
									<li class="panel">
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="single-log-info">
												<div class="custom-input">
													<form action="mail.php" method="post">
														<div class="row">
															<div class="col-md-6">
																<label>First Name:</label>
																<input type="text" name="name" placeholder="<?php if(isset($_SESSION['customer']['contactFirstName'])) echo $_SESSION['customer']['contactFirstName']; 
											else if(isset($_SESSION['admin']['name'])) echo $_SESSION['admin']['firstName'];?>" />
															</div>
															<div class="col-md-6">
																<label>Last Name:</label>
																<input type="text" name="name" placeholder="<?php if(isset($_SESSION['customer']['contactLastName'])) echo $_SESSION['customer']['contactLastName']; 
											else if(isset($_SESSION['admin']['name'])) echo $_SESSION['admin']['lastName'];?>" />
															</div>
														</div>
															<label>Email:</label>
															<input type="text" name="email" placeholder="<?php if(isset($_SESSION['customer']['email'])) echo $_SESSION['customer']['email']; ?>"/>
														<input type="text" name="text" placeholder="<?php if(isset($_SESSION['customer']['addressLine1'])) echo $_SESSION['customer']['addressLine1']; 
											else if(isset($_SESSION['admin']['addressLine1'])) echo $_SESSION['admin']['addressLine1'];?>" />
														<div class="custom-select">
															<select class="form-control">
																<option> <?php if(isset($_SESSION['customer']['city'])) echo $_SESSION['customer']['city']; 
											else if(isset($_SESSION['admin']['city'])) echo $_SESSION['admin']['city'];?> </option>
																<option> Ha Noi </option>
																<option> Thanh Hoa </option>
																<option> Son La </option>
																<option> Nghe An </option>
																<option> Nam Dinh </option>
																<option> TP Ho Chi Minh </option>
															</select>
														</div>
														<div class="custom-select">
															<select class="form-control">
																<option><?php if(isset($_SESSION['customer']['country'])) echo $_SESSION['customer']['country']; 
											else if(isset($_SESSION['admin']['country'])) echo $_SESSION['admin']['country'];?></option>
																<option> Viet Nam </option>
																<option> United States </option>
																<option> United Kingdom </option>
																<option> Canada </option>
																<option> Malaysia </option>
																<option> United Arab Emirates </option>
															</select>
														</div>
														<div class="submit-text">
															<a href="#">Save</a>
														</div>
													</form>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- my account content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        
		<!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>    
    </body>
</html>
