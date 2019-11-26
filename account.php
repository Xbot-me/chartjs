<?php
session_start();

if(isset($_SESSION['email'])){
	header("Location:index.php"); 
}
require_once('partials/header.php')?>
<link rel="stylesheet" href="css/style.css">

<div class="container">
                <div class="row">
                    <!-- <div class="col-md-3 ">
                        <h3>Welcome</h3>
                        <p>View All the Recent Dataset of Universities With Charts</p>
                        <input  type="submit" data-toggle="modal" data-target="#myModal" name="" value="Login"/><br/>    
                    </div> -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog ">
                        <div class="modal-content">

                        <div class="container login-container">
                       
                            <div class=" login-form-1">
                                <h3>Log In As Admin</h3>
                            <form id="login" action="" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Your Email *" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password *" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            </form>

                        </div>
                    </div>


                        </div>
                        </div>
                        </div>
                        <div class="col-md-12">

                    	<div class="main-w3layouts wrapper">
		<h1>Register As Admin</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form id="register" action="" method="post">


					<input class="text email" type="text" name="first_name" placeholder="First Name" required="">
					<input class="text email" type="text" name="last_name" placeholder="Last Name" required="">
					<input class="text pass email" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass pas-con" type="password" placeholder="Confirm Password" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text email" type="text" minlength="11" maxlength="11" name="phone" placeholder="Phone" required="">
                    
                    
                    
                    
                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" class="btnRegister" value="SIGNUP">
				</form>
				<p>Don't have an Account? <input  type="submit" data-toggle="modal" data-target="#myModal" name="" value="Login"/></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
    </div>
    </div>
                </div>

            </div>
            </div>

            </body>
</html>