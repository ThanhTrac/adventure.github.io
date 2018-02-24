@extends('layout')

@section('head')
	<style type="text/css">
		 body{
			background-color:#54B2C7;
		} 

		.login-addon{
			min-width:100px;
			text-align:left;
		}
		
		.reset-left{
			position:relative;
			left:-15px;
		}

		.form-signin{
			padding-top:5%;
			padding-bottom:3%; 
        	
        	position:relative;
        	top:-4px; 
		}

		.title-signin{
		 	padding-bottom:15px;
		 	position:relative;
		 	top:-10px;
		 } 

		.reset-register{
			color: #fff;
		}

		.reset-register:hover{
			text-decoration:none;
			color:#d9534f;
		}
		.btn-login{
			padding-top:20px;
		}

	</style>
@stop

@section('body')

	<div class="jumbotron backgroundSeaBlue form-signin">
		<div class="row">
			<!-- <div class="col-sm-6" style="padding: 20px;margin-top:15px;">
				<div class="col-sm-12">
					Here for the first time?
			
				</div>
				<div class="col-sm-12" style="padding: 20px;margin-top:15px;">
					<form id="signup-form">
						<div class="form-group">
					    <label for="inputfirstname">First Name</label>
					    <input type="name" class="form-control" id="inputfirstname" placeholder="firstname">
					  </div>
					   <div class="form-group">
					    <label for="inputlastname">Last Name</label>
					    <input type="name" class="form-control" id="inputlastname" placeholder="lastname">
					  </div>
					   <div class="form-group">
					    <label for="emailInput">Email address</label>
					    <input type="email" class="form-control" id="emailInput" placeholder="Email">
					  </div>
					   <div class="form-group">
					    <label for="inputUsername">Username</label>
					    <input type="name" class="form-control" id="inputUsername" placeholder="username">
					  </div>
					  <div class="form-group">
					    <label for="passwordInput">Password</label>
					    <input type="password" class="form-control" id="passwordInput" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="confirmPasswordInput">Confirm Password</label>
					    <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password">
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox">I agree to the Terms of Service and will adhere to them unconditionally. <a href="#">(Read Terms of Service)</a> 
					    </label>
					  </div>
					  <button class="btn btn-danger" type="submit">Register</button>
					</form>
				</div>
			</div> -->
			
			<div class="col-md-6 col-md-offset-3">				
				<div class="col-sm-12 bg-primary form-signin">
					<form class="form-horizontal" id ="loginForm">
						<h3 class="form-group text-center title-signin">
							Sign in
						</h3>

						<div class="form-group">
					   		<div class="input-group input-group-lg col-md-12">	
					    		<div class="input-group-addon login-addon">
				    				<span aria-hidden="true">Email</span>
				    			</div class="col-md-6">	    
				    			<input id="exampleInputEmail1" type="email" class="form-control" placeholder="Your email">			        
					    	</div>
						</div>
						<div class="form-group">
					   		<div class="input-group input-group-lg col-md-12">	
					    		<div class="input-group-addon login-addon">
				    				<span aria-hidden="true">Password </span>
				    			</div class="col-md-6">	    
			    			<input id="exampleInputPassword1" type="password" class="form-control" placeholder="Your password">			        
					    	</div>
						</div>
						  <!-- <div class="form-group">
						    <label for="exampleInputEmail1">email</label>
						    <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
						  </div> -->
						  <!-- <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
						  </div> -->
						  <div class="reset-left">Forgot your password? <a href="resetPassword" class="reset-register">
						    Reset password
						  </a></div>
						  <div class="reset-left">Don't have an account? <a href="register" class="reset-register">
						    Register a new account
						  </a></div>
						  <div class="reset-left">Interested in creating a Company Account? <a href="companyContact" class="reset-register">
						    Inquiry Here
						  </a></div>
						  <div class="input-group text-center btn-login col-md-4 col-md-offset-4">
						  	<button type="submit" class="btn btn-lg btn-danger btn-block">Login</button>
						  </div>
					</form>
				</div>
				<!-- <div class="col-sm-12" >
					<div class="col-sm-12 inquiry">
						Interested in creating a Company Account?
					</div>
					<div class="col-sm-12">
						<a href="companyContact" class="btn btn-lg btn-danger">Inquiry Here</a>			
					</div>
				</div> -->
				<!-- <div class="col-sm-12 text-right" style="padding: 20px; margin-top:10px">
					<p>English</p>
					<p><a href="#" style="color: black;text-decoration: underline;">Change Language?</a></p>
				</div> -->
			</div>
		</div>
	</div>
@stop