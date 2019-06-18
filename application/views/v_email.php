<?php
  function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;
  }
?>
<div class="topnav">
  <div style="display: flex;"> 
    <div style="margin: 10px 0 10px 10px;">
      <a href="<?=base_url()?>Company/Application_Status/3/<?= $campaign_id?>">Diterima</a>
      <a href="<?=base_url()?>Company/Application_Status/4/<?= $campaign_id?>">Dijadwalkan</a>
      <a href="<?=base_url()?>Company/Application_Status/5/<?= $campaign_id?>">Ditolak</a>
    </div>
  </div>
</div>
<div class="col-lg-12">
<?php if(!empty($data)) :?>
<div class="row">
  <div class="col-lg-12">
    <div class="tabs tabs-vertical tabs-left">
      <ul class="nav nav-tabs" style="overflow-y: auto;overflow-x:hidden;">
        <?php
        $count = 0;
        foreach ($data as $key => $value): ?>
          <li class="nav-item">
           <a class="nav-link navigasi" href="#<?= $count?>" id="r<?= $count?>" data-toggle="tab" style="color:#0088CC;">
            <div>
              <p class="head no-margin"><?= $value['nama']?></p>
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
          foreach ($data as $key => $value): ?>
            <div id="<?= $count1?>" class="tab-pane">
              <div class="col-lg-12 d-flex">
                <div class="col-md-7" style="padding-left: 0;">
                  <div>
                    <h2 style="margin-bottom: 1px;"><?= $value['nama']?></h2>
                    <p><?= $value['email']?></p>
                    <?php if($status == 4):
                      $Date = date("d-m-Y", strtotime($value['jadwal_wawancara']));
                      ?>
                      <p class="hitam">Jadwal Wawancara : <?= $Date?> || Via Wawancara : <?= $value['via_wawancara']?></p>
                    <?php else:?>
                    <?php endif;?>
                  </div>
                  <div class="card1">
                    <div class="card-header text-center">
                      <h4 class="no-margin">Profile</h4>
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Pendidikan</u></h5>
                      <div class="col-lg-12 no-mp d-flex">
                        <div class="col-lg-6 no-mp">
                          <p class="no-margin mb-1">Universitas : <?= $value['universitas']?></p>
                          <p class="no-margin mb-1">Tahun Lulus : <?= $value['tahun_lulus']?></p>
                        </div>
                        <div class="col-lg-6 no-mp">
                          <p class="no-margin mb-1">Jurusan : <?= $value['jurusan']?></p>
                          <p class="no-margin mb-1">IPK : <?= $value['ipk']?></p>
                        </div>
                      </div> 
                    </div>
                    <div style="margin-top: 10px">
                      <h5 class="mb-1" style="margin-bottom: 0px"><u>Skill</u></h5>
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
                  <?php if($status == 3 || $status == 4 || $status == 5):?>

                  <?php else: ?>
                    <div class="col-lg-12 text-center" style="margin-top:15%;">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#acc">Terima</button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#jadwal">Jadwal Wawancara</button>
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#rej">Tolak</button>
                    </div>
                  <?php endif;?>
                  
                  <div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="<?= base_url()?>Company/Up/3" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="campaign_id" value="<?= $campaign_id?>">
                            <input type="hidden" name="talent_id" value="<?= $value['talent_id']?>">
                            <p>Apakah anda yakin untuk ingin menerima talent ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-success">Ya</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="<?= base_url()?>Company/Up/4" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="campaign_id" value="<?= $campaign_id?>">
                            <input type="hidden" name="talent_id" value="<?= $value['talent_id']?>">
                            <p class="mb-1">Masukkan tanggal wawancara?</p>
                            <input class="form-control mt-2" type="date" name="wawancara" >
                            <p class="mb-1 mt-2">Wawancara akan dilakukan di?</p>
                            <select class="form-control mt-2" name="jalur">
                              <option value="Online">Online</option>
                              <option value="Kantor">Kantor</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success">Save</button>
                          </div>
                        </form>
                      </div>
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
                        <form action="<?= base_url()?>Company/Up/5" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="campaign_id" value="<?= $campaign_id?>">
                            <input type="hidden" name="talent_id" value="<?= $value['talent_id']?>">
                            <p>Apakah anda yakin menolak talent ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-success">Ya</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 no-margin borLB borTB overflow" style="padding-left: 10px;padding-top: 5px; height:493px;">
                    <?php 
                    $count = 1;
                    foreach($value['question'] as $key2 => $value2) :?>
                      <p class="hitam no-margin"> <?=  $count.". ".$value2['pertanyaan']?></p>
                      <div class="card1">
                        <p><? = $value2['jawaban']?></p>
                      </div> 
                    <?php 
                    $count ++;
                    endforeach;?>
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