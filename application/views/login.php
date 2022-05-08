<section style="height:80vh;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mt-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex justify-content-center">
						<div class="img" style="background-image: url(bg-1.jpg);">
			    	</div>
						<div class="login-wrap p-3 md-5">
			      	<div class="d-flex">
			      		<!-- <div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div> -->
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
						<!-- <form action="#" class="signin-form">-->
					<?php if(validation_errors() !== '' or (null !== $this->session->tempdata('login_error'))): ?>
        			<div class="form-error">
            				<?php echo validation_errors("<span class='form-error'>*", "</span>"); ?>
            		<?php echo $this->session->tempdata('login_error') ?>
        			</div>
    				<?php endif; ?>
    				<?php echo form_open(base_url().uri_string()); ?>
			      	<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="name" class="form-control" placeholder="Username">
			      	</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              	<input type="password" name="password" class="form-control" placeholder="Password">
		            </div>
		            <div class="form-group">
		            	<input type="submit" class="form-control btn btn-primary rounded submit px-3" value="Sign In">
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href=<?php echo base_url("Auth/register")?>>Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
