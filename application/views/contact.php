<div class="main-container">

			<section class="page-top">
				<div class="container">
					<div class="col-md-4 col-sm-4">
						<h1>Contact Us</h1>
					</div>
					<div class="col-md-8 col-sm-8">
						<ul class="pull-right breadcrumb">
							<li><a href="<?php echo base_url();?>">HOME</a></li>
							<li class="active">CONTACT US</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="wrapper no-padding">
				<div id="map"></div>
			</section>
			<section class="wrapper padding50">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						
							<h2><?php echo get_data_toko('nama_toko');?></h2>
							<hr/>
							<?php echo get_data_toko('about');?>
							
						</div>
						
						<div class="col-md-4">
							<div id="contactSuccess" class="alert alert-success hidden">
								<strong>Success!</strong> Your message has been sent to us.
							</div>
							<div id="contactError" class="alert alert-error hidden">
								<strong>Error!</strong> There was an error sending your message.
							</div>
							<h2>Contact Us</h2>
							<hr/>
							<form type="post" id="contactForm" action="" >
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>
												Your name <span class="symbol required"></span>
											</label>
											<input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" required>
										</div>
										<div class="col-md-6">
											<label>
												Your email address <span class="symbol required"></span>
											</label>
											<input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Subject <span class="symbol required"></span>
											</label>
											<input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>
												Message <span class="symbol required"></span>
											</label>
											<textarea id="message" name="message" class="form-control" rows="5" data-msg-required="Please enter your message." maxlength="5000" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" data-loading-text="Loading..." class="btn btn-main-color submit_message" value="Send Message">
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</section>
		</div>
		
		
		<script>
			$(".submit_message").click(function(){
				alert("Website Under Construction");
				return false;
			});
		</script>