<div class="col-lg-12">
<?php if(!empty($data1)) :?>
<div class="row">
  <div class="col-lg-12">
    <div class="tabs tabs-vertical tabs-left">
      <ul class="nav nav-tabs" style="overflow-y: auto;overflow-x:hidden;">
        <?php
          function rupiah($angka){
            $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
            return $hasil_rupiah;
          }
        $count = 0;
        foreach ($data1 as $key => $value): ?>

          <li class="nav-item">
           <a class="nav-link navigasi" href="#<?= $count?>" id="r<?= $count?>" data-toggle="tab" style="color:#0088CC;">
            <div>
              <p class="head no-margin"><?= $value['nama_pekerjaan']?>   
                <?php if($value['status'] == 0) :?>

                <?php else :?>
                  <span class="" style="border-radius: 5px;font-size: 16px;padding:1px 6px;" id="z<?= $value['status']?>"></span>
                <?php endif;?>
              </p>
              <p class="no-margin">Permintaan Gaji : <?= rupiah($value['salary'])?></p>
              <p class="no-margin">Persentase Kecocokan : <?= $value['matching_persentase']?>%</p>
            </div>  
           </a>
        </li>
        <?php
        $count++; 
        endforeach ?>
      </ul>
        <div class="tab-content" style="border-left: 4px solid #7fb4ed">
          <?php 
          $count1 = 0;
          foreach ($data1 as $key => $value): ?>
            <div id="<?= $count1?>" class="tab-pane">
              <div class="col-lg-12 d-flex">
                <div class="col-md-7" style="padding-left: 0;">
                  <div>
                    <h2 style="margin-bottom: 1px;"><?= $value['nama_pekerjaan']?></h2>
                    <a style="color:blue;" href="https://<?= $value['url']?>"><p style="margin-bottom: 10px;"><?= $value['url']?></p></a>
                    <?php if($value['status'] == 4):
                      $Date = date("d-m-Y", strtotime($value['jadwal_wawancara']));
                      ?>
                      <p class="hitam">Jadwal Wawancara : <?= $Date?> || Via Wawancara : <?= $value['via_wawancara']?></p>
                    <?php else:?>
                    <?php endif;?>
                  </div>
                  <div class="card1 overflow" style="height: 388px;">
                    <div class="card-header text-center">
                      <h4 class="no-margin">Informasi Penerimaan</h4>
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Deskripsi Perusahaan</u></h5>
                      <div class="col-lg-12 no-mp d-flex">
                        <p class="no-margin mb-1"><?= $value['companyd']?></p>
                      </div> 
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Deskripsi Aturan Diperusahaan</u></h5>
                      <div class="col-lg-12 no-mp d-flex">
                        <p class="no-margin mb-1"><?= $value['roledc']?></p>
                      </div> 
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Minimun IPK</u></h5>
                      <div class="col-lg-12 no-mp d-flex">
                        <div class="col-lg-6 no-mp">
                          <p class="no-margin mb-1">IPK : <?= $value['ipk']?></p>
                        </div>
                      </div> 
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Jenis Pekerjaan yang dibutuhkan</u></h5>
                      <div class="col-lg-12 no-mp">
                        <?php
                          $skill = explode(";", $value['jenis_pekerjaan']);
                          array_pop($skill);
                          $count = 0;
                          foreach ($skill as $key => $value1) {
                            echo '<button type="button" class="btn btn-success" style="margin-right:10px;">"'.$value1.'"</button>';
                            $count++;
                          }
                        ?>
                      </div> 
                    </div>
                    
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Lokasi Penempatan</u></h5>
                      <div class="col-lg-12 no-mp">
                        <?php
                          $skill = explode(";", $value['lokasi']);
                          array_pop($skill);
                          $count = 0;
                          foreach ($skill as $key => $value1) {
                            echo '<button type="button" class="btn btn-success" style="margin-right:10px;">"'.$value1.'"</button>';
                            $count++;
                          }
                        ?>
                      </div> 
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Skill Yang dibutuhkan</u></h5>
                      <div class="col-lg-12 no-mp">
                        <?php
                          $string = $value['bahasa'].$value['skillLanguage'].$value['skillDatabase'].$value['skillFramework'];
                          $skill = explode(";", $string);
                          array_pop($skill);
                          $count = 0;
                          foreach ($skill as $key => $value1) {
                            echo '<button type="button" class="btn btn-success" style="margin-right:10px;">"'.$value1.'"</button>';
                            $count++;
                          }
                        ?>
                      </div> 
                    </div>
                  </div>
                  <form action="<?= base_url()?>Talent/upTalent" method="post">
                  <?php if($value['status'] == 1 || $value['status'] == 3 || $value['status'] == 4 || $value['status'] == 5):?>

                    <?php else: ?>
                      <div class="col-lg-12 text-center" style="margin-top:2%;">
                        <button type="submit" class="btn btn-success">Terima</button>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#rej">Tolak</button>
                      </div>
                    <?php endif;?>
        
                </div>
                <div class="col-lg-5 no-margin borLB borTB overflow" style="padding-left: 10px;padding-top: 5px; height:493px;">
                    <input type="hidden" name="talent_id" value="<?= $talent_id?>">
                    <input type="hidden" name="campaign_id" value="<?= $value['campaign_id']?>">
                    <?php 
                    $count = 1;
                    foreach($value['question'] as $key2 => $value2) :?>
                      <p class="hitam no-margin"> <?=  $count.". ".$value2['pertanyaan']?> <i for="count1"></i></p>
                      <div class="card1">
                        <input type="hidden" name="question_id[]" value="<?= $value2['question_id']?>">
                        <?php if($value['status'] == 0):?>
                          <textarea rows="4" style="width: 100%" name="jawaban[]" required></textarea>
                        <?php elseif($value['status'] == 1 || $value['status'] == 3 || $value['status'] == 4 || $value['status'] == 5):?>
                          <p class="no-margin"><?= $value2['jawaban']?></p>
                        <?php endif;?>
                      </div>
                    <?php 
                    $count ++;
                    endforeach;?>
                </div>
                </form>
              </div>              
            </div>

            <div class="modal fade" id="rej" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="<?= base_url()?>Talent/Up/5" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="talent_id" value="<?= $talent_id?>">
                            <input type="hidden" name="campaign_id" value="<?= $value['campaign_id']?>">
                            <p>Apakah anda yakin menolak Lowongan Ini ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-success">Ya</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
          <?php 
          $count1++;
          endforeach ?>
        </div>
      </div>
  </div>
</div>
<?php else :?>
  <div class="icon">
    <div class="fa fa-inbox fass">
    </div>
    <p>Nothing Application   Sir</p>
  </div>
<?php endif;?>
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
  <script src="<?= base_url()?>assets/js/jquery.validate.js"></script>
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
                    text: "Profile telah disimpan",
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

<script type="text/javascript">
            $(document).ready(function(){
                $("#z1").addClass("btn-primary1");
                $("#z1").text("Waiting");
                $("#z3").addClass("btn-success");
                $("#z3").text("Diterima Langsung");
                $("#z4").addClass("btn-warning");
                $("#z4").text("Interview");
                $("#z5").addClass("btn-secondary");
                $("#z5").text("Ditolak");
           
            });
</script>

<script>
  $(document).ready(function(){
    $("#0").addClass("active");
    var current = 0;
    $(".navigasi").click(function() {
        var temp = $(this).attr("id");
        temp=temp.substring(1, temp.length);
        $("#"+current).removeClass("active");
        $("#"+temp).addClass("active");
        current = temp;
      });
  });

</script>
<style type="text/css">
  .jawaban{
   border: 1px solid grey;
  }
  .hitam{
      color: #000;
      font-size: 18px;
  }
  .head{
    font-size: 22px;
    color: #000;
    position: relative;
    display: inline-block;
  }

  .no-margin{
    margin:0;
  }

  .icon{
    margin-top: 12%;
    margin-bottom: 14%;
    font-size: 25px;
    position: relative;
    text-align: center;
  }

  .icon .fass{
    font-size: 200px;
    position: relative;
    text-align: center;
    height: 100%;
  }

  .borLB{
    border-left: 1px solid #ccc;
  }

  .borTB{
    border-top: 1px solid #ccc;
  }

  .overflow{
    overflow: auto;
  }

  .no-margin{
    margin:0 !important;
  }

  .no-mp{
    margin:0 !important;
    padding:0 !important;
  }

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

  .btn-primary1{
    background-color: #0088CC;
    border-color: #0088CC #0088CC #006699;
    color: #FFF;
  }

  /* width */
  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
</style>