<div class="col-lg-12 col-md-6 py-3">
		<div class="row">		

			<div class="col-lg-6">
				<div class="borRB" style="height: 555px">
					<div>
						<h4 class="d-Ro">Live</h4>
						<a href="<?= base_url()?>Company/Campaign" target="_blank"><button class="btn btn-primary d-Ro" style="background: #2aacec;float: right;">Buka Lowongan Kerja</button></a>
					</div>
					<?php foreach ($data['campaignLive'] as $key => $value):?>
						<div class="card1">
							<div class="card-body1">
								<div class="row">
									<div class="col-lg-12">
										<a href="<?= base_url()?>Company/Applications/<?= $value['campaign_id']?>" target="_blank"><p style="color:#0997fe;font-size: 20px;" class="d-Ro"><?= $value['nama_pekerjaan']?></p></a>
										<a><button class="btn d-Ro" style="float: right;" title="Tutup Lowongan" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrow-right"></i></button></a>

									</div>
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Tutup Lowongan "<i><?= $value['nama_pekerjaan']?></i>"</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <form action="<?= base_url()?>Company/Tutup_Lowongan" method="post">
									        	<input type="hidden" name="campaign_id" value="<?= $value['campaign_id']?>">
									        	<p>Apakah anda yakin untuk menutup lowongan ini ?</p>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									        <button type="submit" class="btn btn-success">Ya</button>
									      </div>
									      </form>
									    </div>
									  </div>
									</div>
								</div>
								<div>
									<div class="d-R">1</div>
									<div class="d-R" style="float:right;">200+</div>
									<div class="progress">
									    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="500" aria-valuemin="0" aria-valuemax="200" style="width:<?= $value['countMatching']?>%">
									      <p style="color: #000;margin:0;line-height: 0;">Matching Talent : <?= $value['countMatching']?> talent</p>
									    </div>
 								 	</div>
								</div>
								
								<div class="col-md-12 d-flex text-center pt-3">
									<div class="col-md-6">
										<p class="no-margin"><?= $value['countAcc']?></p>
										<p>Application</p>
									</div>
									<div class="col-md-6">
										<p class="no-margin"><?= $value['countRej']?></p>
										<p>Rejected </p>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="borLB" style="height: 555px">
					<div>
						<h4>Complete</h4>
					</div>
						<?php foreach ($data['campaignComplete'] as $key => $value):?>
						<div class="card1">
							<div class="card-body1">
								<div class="row">
									<div class="col-lg-12">
										<a href="<?= base_url()?>Company/Applications/<?= $value['campaign_id']?>" target="blank"><p style="color:#0997fe;font-size: 20px;" class="d-Ro"><?= $value['nama_pekerjaan']?></p></a>
									</div>
								</div>
								<div>
									<div class="d-R">1</div>
									<div class="d-R" style="float:right;">200+</div>
									<div class="progress">
									    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="500" aria-valuemin="0" aria-valuemax="200" style="width:<?= $value['countMatching']?>%">
									      <p style="color: #000;margin:0;line-height: 0;">Matching Talent : <?= $value['countMatching']?> talent</p>
									    </div>
 								 	</div>
								</div>
								
								<div class="col-md-12 d-flex text-center pt-3">
									<div class="col-md-6">
										<p class="no-margin"><?= $value['countAcc']?></p>
										<p>Application</p>
									</div>
									<div class="col-md-6">
										<p class="no-margin"><?= $value['countRej']?></p>
										<p>Rejected</p>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
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
  <script src="<?= base_url()?>assets/js/main.js"></script>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/default.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/theme-elements.css">
    
  </body>
</html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.toast.min.css">
<script src="<?php echo base_url().'assets/js/jquery.toast.min.js'?>"></script>
<?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Campaigns telah disimpan",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php else:?>
<?php endif;?>

<style type="text/css">
.card1 {
    width: 100%;
    border: 1px solid #ccc;
    -webkit-box-shadow: 0 2px 24px #d9d9d9;
    box-shadow: 0 2px 24px #d9d9d9;
    border-radius: 4px;
    margin-bottom: 20px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 15px;
    position: relative;
}
.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card1 .card-body1{
	padding: 20px;
}

.borRB{
	padding: 10px;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	overflow-y: auto;
}

.borLB{
	padding: 10px;
	border-left: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	overflow-y: auto;
}

.btn .btn-primary1{
	background: #2aacec;
    border: 1px solid #fff;
    color: #000;
}

.d-R{
	color: #bfbfbf;
	position: relative;
	display: inline-block;
	font-size: 11px;

}

.d-Ro{
	position: relative;
	display: inline-block;
}

.no-margin{
	margin:0;
}



</style>