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
							<h2>Login or Register</h2>
							<ul class="text-left">
								<li><a href="?mod=page&act=home">Home </a></li>
								<li><span> // </span>Register</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- login content section start -->
		<section class="pages login-page section-padding"> 
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="main-input padding60">
							<div class="log-title">
								<h3><strong>registered customers</strong></h3>
							</div>
							<div class="login-text">
								<?php if(isset($_COOKIE['msg'])){ ?>
					                <div class="alert alert-danger">
					                    <strong>Thất bại! </strong><?= $_COOKIE['msg'] ?>
					                </div>
					            <?php }?>
								<div class="custom-input">
									<p>If you have an account with us, Please log in!</p>
									<form action="?mod=login&act=login_action" method="POST">
										<input type="email" required name="email" placeholder="Email" />
										<input type="password" required name="password" placeholder="Password" />
										<a class="forget" href="#">Forget your password?</a>
										<div>
										    <button type="submit" class=" submit-text btn btn-primary">LOGIN</button>
									    </div>
									</form>
								</div>
								<div class="submit-text coupon">
							<a href="admin/?mod=login&act=login">Admin login</a>
						</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="main-input padding60 new-customer">
							<div class="log-title">
								<h3><strong>new customers</strong></h3>
							</div>
							<div class="custom-input">
								<form action="mail.php" method="post">
									<input type="text" name="name" placeholder="Name here.." />
									<input type="text" name="email" placeholder="Email Address.." />
									<input type="text" name="number" placeholder="Phone Number.." />
									<input type="text" name="address" placeholder="Password" />
									<input type="password" name="password" placeholder="Confirm Password" />
									<label class="first-child">
										<input type="radio" name="rememberme" value="forever">
										Sign up for our newsletter!
									</label>
									<div class="submit-text coupon">
										<a href="my-account.php">Register</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- login content section end -->
        <!-- footer section start -->
		<?php require_once('views/include/footer.php') ?>        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('views/include/jquery.php') ?>
    </body>
</html>
