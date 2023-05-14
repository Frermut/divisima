
	<!-- Contact section -->
	<section class="sign-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<h3 class="mt-5">Create Account</h3>
                    <?php if ($_SESSION['reg_error']) :?>
						<div class="alert alert-danger"><?= $_SESSION['reg_error']?></div>
                    <?php 
                        unset($_SESSION['reg_error']);
                        endif;
                    ?>
					<form method="POST" class="contact-form mt-4 mb-5">
						<input type="text" name="login" placeholder="Your login" required>

                        
						<input type="password" name="password" placeholder="Your password" required>
						<input type="password" name="confirm-password" placeholder="Confirm password" required>

						<button type="submit" class="site-btn">Sign Up</button>
					</form>
				</div>
			</div>
		</div>

	</section>
	<!-- Contact section end -->


