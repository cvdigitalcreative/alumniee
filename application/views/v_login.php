    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="<?= base_url()?>assets/images/undraw_pair_programming_njlp.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="col-lg-5 p-5 ftco-wrap ftco-animate">
		              <form action="<?= base_url()?>Login/auth" method="post">
			              <div class="form-group">
			                <input type="email" class="form-control" placeholder="Email" name="email" required>
			              </div>
			              <div class="form-group">
			                <input type="password" class="form-control" placeholder="Password" name="password" required>
			              </div>
                    <div>
                      <?php echo $this->session->flashdata('msgg');?>
                    </div>
			              <div class="form-group">
			                <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
			              </div>
			            </form>
		           <p>Don't have an account?<a href="<?= base_url()?>Register">Sign up for free</a></p>
    			</div>
	        </div>
	    	</div>
      </div>
    </div>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url()?>assets/js/popper.min.js"></script>
  <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url()?>assets/js/aos.js"></script>
  <script src="<?= base_url()?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url()?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url()?>assets/js/scrollax.min.js"></script>
  <script src="<?= base_url()?>assets/js/google-map.js"></script>
  <script src="<?= base_url()?>assets/js/main.js"></script>
    
  </body>
</html>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.toast.min.css">
<script src="<?php echo base_url().'assets/js/jquery.toast.min.js'?>"></script>
<?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Register Success",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php else:?>
<?php endif;?>