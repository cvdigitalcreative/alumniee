    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" style="width:100%;opacity:0.6;" src="<?= base_url()?>assets/images/undraw_pair_programming_njlp.svg" alt="">
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