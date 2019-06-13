    <style type="text/css">
      .field-icon {
        float: right;
        margin-right: 10px;
        margin-top: -26px;
        position: relative;
        z-index: 2;
      }
    </style>
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="<?= base_url()?>assets/images/undraw_pair_programming_njlp.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="col-lg-6 p-5 ftco-wrap ftco-animate" style="margin-top: auto;margin-bottom: auto; ">
		            <div class="row">
                  <div class="col-md-12 nav-link-wrap pb-sm-3 ftco-animate">
                    <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true" style="margin-right: 20px;">Talent</a>

                      <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false" style="margin-left: : 20px;">Employer</a>
                    </div>
                  </div>
                  <div class="col-md-12 align-items-center ftco-animate">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <div class="">
                  <form action="<?= base_url()?>Register/SaveAccount" method="post">
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" class="form-control" placeholder="" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <input type="email" class="form-control" placeholder="" name="email" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Password</label>
                      <input type="password" class="form-control" placeholder="" id="password-field" name="password" required>
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Create Account" class="btn btn-primary py-3 px-5">
                    </div>
                  </form>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <div class="">
                  <form action="<?= base_url()?>Register/SaveAccount" method="post">
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input type="text" class="form-control" placeholder="" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Company</label>
                      <input type="text" class="form-control" placeholder="" name="company" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Phone Number</label>
                      <input type="text" class="form-control" placeholder="" name="no_hp" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <input type="email" class="form-control" placeholder="" name="email" required>
                    </div>
                    <div class="form-group">
                      <label class="control-label">Password</label>
                      <input type="password" class="form-control" placeholder="" id="password-field1" name="password" required>
                      <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"></span>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Create Account" class="btn btn-primary py-3 px-5">
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
                </div>
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


<script type="text/javascript">
    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });

    $(".toggle-password1").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
</script>

