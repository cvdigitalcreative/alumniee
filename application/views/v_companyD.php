      <div class="hero-wrap js-fullheight">
        <div class="container-fluid px-0">
          <div class="col-lg-12">
            <div class="col-lg-10 mc">
                  <section class="ftco-section bg-light">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 ftco-animate">
                          <div id="accordion">
                            <div class="row">
                              <div class="col-md-12">
                                
                                <form action="<?= base_url()?>Company/saveCampaign" method="post" id="mylove">
                                  <div class="card" id="21">
                                    <div class="card-header">
                                      <a class="card-link d-active" data-toggle="collapse" id="dropdown1" href="#menuone" aria-expanded="true" aria-controls="menuone"><div class="top-number">1</div>Role<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menuone" class="collapse show">
                                      <div class="card-body">
                                        <!-- <form> -->
                                          
                                        <div class="card1" id="1" >
                                          <div class="card-header1">
                                            <h6>Nama Pekerjaan <i for="nama_pekerjaan"></i></h6>
                                          </div>
                                          <div class="input-next mb-2">
                                            <input type="text" name="nama_pekerjaan">
                                          </div>
                                          <div class="card-header1 mt-3" >
                                            
                                            <h6>Jenis Pekerjaan <i for="sc1[]"></i></h6>
                                          </div>
                                          <div id="job">
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Hardware Engineer' name='sc1[]' id='checkbox1'/>
                                              <label for='checkbox1'>Hardware Engineer</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Software Engineer' name='sc1[]'  id='checkbox2'/>
                                              <label for='checkbox2'>Software Engineer</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='IT Support' name='sc1[]'  id='checkbox3'/>
                                              <label for='checkbox3'>IT Support</label>
                                            </div>
                                          </div>
                                          <div class="card-header1 mt-3">
                                            <h6>Lokasi <i for="sc2[]"></i></h6>
                                          </div>
                                          <div class="">
                                            <div class="checkboxp">
                                              <input type='checkbox' value="Banda Aceh" name='sc2[]' id='checkbox4'/>
                                              <label for='checkbox4'>Banda Aceh</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Medan" name='sc2[]'  id='checkbox5'/>
                                              <label for='checkbox5'>Medan</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Padang" name='sc2[]'  id='checkbox6'/>
                                              <label for='checkbox6'>Padang</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Pekanbaru" name='sc2[]'  id='checkbox7'/>
                                              <label for='checkbox7'>Pekanbaru</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Jambi" name='sc2[]'  id='checkbox8'/>
                                              <label for='checkbox8'>Jambi</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Palembang" name='sc2[]'  id='checkbox9'/>
                                              <label for='checkbox9'>Palembang</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value="Bengkulu" name='sc2[]'  id='checkbox10'/>
                                              <label for='checkbox10'>Bengkulu</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value="Bandar Lampung" name='sc2[]'  id='checkbox11'/>
                                              <label for='checkbox11'>Bandar Lampung</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Pangkal Pinang" name='sc2[]'  id='checkbox12'/>
                                              <label for='checkbox12'>Pangkal Pinang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Tanjung Pinang" name='sc2[]'  id='checkbox13'/>
                                              <label for='checkbox13'>Tanjung Pinang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Jakarta" name='sc2[]'  id='checkbox14'/>
                                              <label for='checkbox14'>Jakarta</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bandung" name='sc2[]'  id='checkbox15'/>
                                              <label for='checkbox15'>Bandung</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Semarang" name='sc2[]'  id='checkbox16'/>
                                              <label for='checkbox16'>Semarang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Yogyakarta" name='sc2[]'  id='checkbox17'/>
                                              <label for='checkbox17'>Yogyakarta</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Surabaya" name='sc2[]'  id='checkbox18'/>
                                              <label for='checkbox18'>Surabaya</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Serang" name='sc2[]'  id='checkbox19'/>
                                              <label for='checkbox19'>Serang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Denpasar" name='sc2[]'  id='checkbox20'/>
                                              <label for='checkbox20'>Denpasar</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Mataram" name='sc2[]'  id='checkbox21'/>
                                              <label for='checkbox21'>Mataram</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Kupang" name='sc2[]'  id='checkbox22'/>
                                              <label for='checkbox22'>Kupang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Pontianak" name='sc2[]'  id='checkbox23'/>
                                              <label for='checkbox23'>Pontianak</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Palangka Raya" name='sc2[]'  id='checkbox24'/>
                                              <label for='checkbox24'>Palangka Raya</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Banjarmasin" name='sc2[]'  id='checkbox25'/>
                                              <label for='checkbox25'>Banjarmasin</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Samarinda" name='sc2[]'  id='checkbox26'/>
                                              <label for='checkbox26'>Samarinda</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Tanjung Selor" name='sc2[]'  id='checkbox27'/>
                                              <label for='checkbox27'>Tanjung Selor</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Manado" name='sc2[]'  id='checkbox28'/>
                                              <label for='checkbox28'>Manado</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Palu" name='sc2[]'  id='checkbox29'/>
                                              <label for='checkbox29'>Palu</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Makassar" name='sc2[]'  id='checkbox30'/>
                                              <label for='checkbox30'>Makassar</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Kendari" name='sc2[]'  id='checkbox31'/>
                                              <label for='checkbox31'>Kendari</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Gorontalo" name='sc2[]'  id='checkbox32'/>
                                              <label for='checkbox32'>Gorontalo</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Mamuju" name='sc2[]'  id='checkbox33'/>
                                              <label for='checkbox33'>Mamuju</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Ambon" name='sc2[]'  id='checkbox34'/>
                                              <label for='checkbox34'>Ambon</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Sofifi" name='sc2[]'  id='checkbox35'/>
                                              <label for='checkbox35'>Sofifi</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Jayapura" name='sc2[]'  id='checkbox36'/>
                                              <label for='checkbox36'>Jayapura</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Manokwari" name='sc2[]'  id='checkbox37'/>
                                              <label for='checkbox37'>Manokwari</label>
                                            </div>
                                          </div>
                                          <div class="card-header1 mt-3">
                                            <h6>Gaji</h6>
                                          </div>
                                          <div class="">
                                            <select class="select-next1 mb-2" name="salary">
                                              <option value="1000000">Rp. 1.000.000</option>
                                              <option value="2000000">Rp. 2.000.000</option>>
                                              <option value="3000000">Rp. 3.000.000</option>
                                              <option value="4000000">Rp. 4.000.000</option>
                                              <option value="5000000">Rp. 5.000.000</option>
                                              <option value="6000000">Rp. 6.000.000</option>
                                              <option value="7000000">Rp. 7.000.000</option>
                                              <option value="8000000">Rp. 8.000.000</option>
                                              <option value="9000000">Rp. 9.000.000</option>
                                              <option value="10000000">Rp. 10.000.000</option>
                                              <option value="11000000">Rp. 11.000.000</option>
                                              <option value="12000000">Rp. 12.000.000</option>
                                              <option value="13000000">Rp. 13.000.000</option>
                                              <option value="14000000">Rp. 14.000.000</option>
                                              <option value="15000000">Rp. 15.000.000</option>
                                            </select>
                                          </div>
                                          <div class="">
                                              <div class="card-header1 mt-3">
                                                <h6>Jurusan <i for="sc3[]"></i></h6>
                                              </div>
                                              <div class="mb-2 checkboxp">
                                                <input type='checkbox' value='Sistem Komputer' name='sc3[]' id='checkbox38'/>
                                                <label for='checkbox38'>Sistem Komputer</label>
                                              </div>
                                              <div class="checkboxp">
                                                <input type='checkbox' value='Teknik Informatika' name='sc3[]'  id='checkbox39'/>
                                                <label for='checkbox39'>Teknik Informatika</label>
                                              </div>
                                              <div class="checkboxp">
                                                <input type='checkbox' value='Sistem Informasi' name='sc3[]'  id='checkbox40'/>
                                                <label for='checkbox40'>Sistem Informasi</label>
                                              </div>
                                          </div>
                                          <div class="">
                                              <div class="card-header1 mt-3">
                                                <h6>Minimun IPK <i for="minimun_ipk"></i></h6>
                                              </div>
                                              <div class="input-next">
                                                <input type="number" name="minimun_ipk" step="0.01" min="2.5" max="4">
                                              </div>
                                          </div>
                                          <div class="card-header1 mt-3">
                                            <h6>Skill:Bahasa <i for="sc5[]"></i></h6>
                                          </div>
                                          <div class="">
                                            <div class=" checkboxp">
                                              <input type='checkbox' value='English' name='sc5[]' id='checkbox44'/>
                                              <label for='checkbox44'>English</label>
                                            </div>
                                            <div class=" checkboxp">
                                              <input type='checkbox' value='Indonesian' name='sc5[]'  id='checkbox45'/>
                                              <label for='checkbox45'>Indonesian</label>
                                            </div>
                                          </div>
                                          <div class="">
                                          
                                          <div class="card-header1" style="margin-top: 10px;">
                                            
                                            <h6>Skill : Programming Language <i for="sc6[]"></i></h6>
                                          </div>
                                          
                                            <div class="checkboxp">
                                              <input type='checkbox' value='C' name='sc6[]' id='checkbox46'/>
                                              <label for='checkbox46'>C</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='C++' name='sc6[]'  id='checkbox47'/>
                                              <label for='checkbox47'>C++</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Java' name='sc6[]'  id='checkbox48'/>
                                              <label for='checkbox48'>Java</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='PHP, HTML, CSS' name='sc6[]'  id='checkbox49'/>
                                              <label for='checkbox49'>PHP, HTML, CSS</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Objective-C' name='sc6[]'  id='checkbox50'/>
                                              <label for='checkbox50'>Objective-C</label>
                                            </div>
                                            
                                            <div class="card-header1" style="margin-top: 10px;">
                                              <h6>Skill : Database <i for="sc8[]"></i></h6>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='MySQL' name='sc8[]' id='checkbox51'/>
                                              <label for='checkbox51'>MySQL</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Oracle' name='sc8[]'  id='checkbox52'/>
                                              <label for='checkbox52'>Oracle</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='PostgreSQL' name='sc8[]'  id='checkbox53'/>
                                              <label for='checkbox53'>PostgreSQL</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Cassandra' name='sc8[]'  id='checkbox54'/>
                                              <label for='checkbox54'>Cassandra</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='SQL Server' name='sc8[]'  id='checkbox55'/>
                                              <label for='checkbox55'>SQL Server</label>
                                            </div>
                                          

                                            <div class="card-header1" style="margin-top: 10px;">
                                              <h6>Skill : Framework <i for="sc9[]"></i></h6>
                                            </div>
                                            
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Android' name='sc9[]' id='checkbox56'/>
                                              <label for='checkbox56'>Android</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Angular' name='sc9[]'  id='checkbox57'/>
                                              <label for='checkbox57'>Angular</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='Spring' name='sc9[]'  id='checkbox58'/>
                                              <label for='checkbox58'>Spring</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='CodeIgniter' name='sc9[]'  id='checkbox59'/>
                                              <label for='checkbox59'>CodeIgniter</label>
                                            </div>
                                            <div class="checkboxp">
                                              <input type='checkbox' value='React' name='sc9[]'  id='checkbox60'/>
                                              <label for='checkbox60'>React</label>
                                            </div>
                                          </div>
                                          <button type="button" class="button-next button1" style="margin-bottom:20px;"><span class=>Next</span></button>
                                        </div>
                                      
                                    </div>
                                  </div>
                                </div>

                                  <div class="card" id="22">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown2" aria-expanded="false" aria-controls="menutwo"><div class="top-number">2</div>Role & Deskripsi Perusahaan<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menutwo" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="5">
                                          <div class="card-header1">
                                            <h6>Website Perusahaan <i for="url"></i></h6>
                                          </div>
                                          <div class="input-next mb-2">
                                            <input type="text" name="url">
                                            <h6><i>Website ini digunakan untuk talent melihat informasi perusahaan</i></h6>
                                          </div>
                                          <div class="card-header1 mt-3" >
                                            <h6>Deskripsi Perusahaan</h6>
                                          </div>
                                          <div>
                                            <textarea id="demo-editor-bootstrap" name="companyd" rows="7"></textarea>
                                          </div>
                                          <div class="card-header1 mt-3" >
                                            <h6>Deskripsi Pekerjaan</h6>
                                          </div>
                                          <div>
                                            <textarea id="demo-editor-bootstrap1" name="roledc" rows="7"></textarea>
                                          </div>
                                          
                                          
                                        </div>
                                        <button type="button" class="button-next button2" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="23">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown3" aria-expanded="false" aria-controls="menu3"><div class="top-number">3</div>Pertanyaan untuk talent ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu3" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="3">
                                          <div id="dynamic_field">
                                            <div>
                                              <div class="card-header1">
                                                <h6>Pertanyaan<i for="ques[]"></i></h6>
                                              </div>
                                              <div class="input-next mb-2">
                                                <input type="text" name="ques[]">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div>
                                          <button type="button" class="button-next100" id="add" style="margin-bottom: 20px;">Tambah Pertanyaan</button>
                                        </div>
                                        <button type="button" class="button-next button3" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="24">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown4" aria-expanded="false" aria-controls="men46"><div class="top-number">4</div>Syarat dan Ketentuan <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu4" class="collapse">
                                      
                                        <div class="card-body">
                                          <div class="card1" id="4">
                                            <div class="input-next mb-2">
                                              <h6><i>Setiap talent yang direkrut perusahaan wajib membayar biaya 10% dari total 6 bulan gaji talent tanpa memotong gaji talent</i></h6>
                                            </div>
                                          </div>
                                          <div class="card-body">
                                            <button type="Submit" class="button-next" style="margin-bottom:20px;"><span >Finish</span></button>
                                          </div>
                                        </div>
                                    </div>
                                   
                                        

                                    </div>
                                  </div>

                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </section>
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
  <script src="<?= base_url()?>assets/js/main.js"></script>
  <!-- <script src="<?= base_url()?>assets/js/bootstrap3-wysihtml5.all.min.js"></script> -->
  <script src="<?= base_url()?>assets/js/jquery.validate.js"></script>
  <!-- <link type="text/css" href="<?= base_url()?>assets/css/bootstrap3-wysihtml5.min.css" rel="stylesheet"/> -->
  </body>
</html>
<script>
  $(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div id="row'+i+'"><div class="card-header1"><h6 style="display:inline-block;">Pertanyaan<i for="ques[]"></i></h6><button type="button" id="'+i+'" class="close-container1 btn_remove"><i class="fa fa-window-close"></i></button></div><div class="input-next mb-2"><input type="text" name="ques[]"></div></div>  ');
  });

  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
});
</script>
<script type="text/javascript">
  $(document).ready(function() {

      $('#mylove').validate({ // initialize the plugin
        errorPlacement: function(error, element) {
          // Append error within linked label
          $( element )
            .closest( "form" )
              .find( "i[for='" + element.attr( "name" ) + "']" )
                .append( error );
        },
        errorElement: "span",
        rules: {
            'nama_pekerjaan': {
                required: true
            },'sc1[]': {
                required: true
            },'sc2[]': {
                required: true
            },'sc3[]': {
                required: true
            },'minimun_ipk': {
                required: true
            },'sc5[]': {
                required: true
            },'sc6[]': {
                required: true
            },'sc8[]': {
                required: true
            },'sc9[]': {
                required: true
            },'url': {
                required: true
            }
            ,'ques[]': {
                required: true
            }
            
        },
        messages: {
            'nama_pekerjaan': {
                required: "(Wajib Diisi)"
            },
            'sc1[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'sc2[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'sc3[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'minimun_ipk': {
                required: "(Required)",
                min: "(IPK tidak bisa kurang dari satu)",
                max: "(IPK tidak bisa lebih dari 4)"
            },
            'sc5[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'sc6[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'sc8[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'sc9[]': {
                required: "(Minimal Pilih  Satu)"
            },
            'url': {
                required: "(Wajib Diisi)"
            },
            'ques[]': {
                required: "(Wajib Diisi)"
            }
        },
    });
      $(".button1").click(function() {
        if($("#mylove").valid()){
          $("#dropdown1").attr("aria-expanded","false");
          $("#dropdown1").toggleClass("d-active");
          $("#menuone").toggleClass("show");
          $("#dropdown2").attr("href","#menutwo");
          $("#dropdown2").attr("aria-expanded","true");
          $("#dropdown2").toggleClass("d-active");
          $("#menutwo").toggleClass("show");
        } 
      });

      $(".button2").click(function() {
          if($("#mylove").valid()){
            $("#dropdown2").attr("aria-expanded","false");
            $("#dropdown2").toggleClass("d-active");
            $("#menutwo").toggleClass("show");
            $("#dropdown3").attr("href","#menu3");
            $("#dropdown3").attr("aria-expanded","true");
            $("#dropdown3").toggleClass("d-active");
            $("#menu3").toggleClass("show");
          }
        });

      $(".button3").click(function() {
        if($("#mylove").valid()){
          $("#dropdown3").attr("aria-expanded","false");
          $("#dropdown3").toggleClass("d-active");
          $("#menu3").toggleClass("show");
          $("#dropdown4").attr("href","#menu4");
          $("#dropdown4").attr("aria-expanded","true");
          $("#dropdown4").toggleClass("d-active");
          $("#menu4").toggleClass("show");
        }
      });
  });

</script>

<script>
        $(document).ready(function() {
        $("#demo-editor-bootstrap").wysihtml5({

        });
        // $("#demo-editor-bootstrap1").wysihtml5();
});
</script>

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.toast.min.css">
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
<?php endif;?> -->

<style type="text/css">
  a{
    color: #000;
  }

  textarea{
    width: 100%;
  }

  .card1 {
    width: 100%;
    float: left;
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

  .wid50{
    width: 49%;
  }

  .checkboxp {
    position: relative;
    display: inline-block;
    margin-top: -6px;
    padding: 0;
  }

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-header  {
  border: 1px solid #4fa4e2;
  border-radius:20px;
}

.mc {
  margin-left:auto;
  margin-right:auto;
}

input[type=text]{
   padding: 10px;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #ccc;
  font-size: 1em;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  color: #3 03030;
  font-family: inherit;
  border-radius: 4px;
}

input[type=number]{
   padding: 10px;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #ccc;
  font-size: 1em;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  color: #3 03030;
  font-family: inherit;
  border-radius: 4px;
}

input[type=radio]{
    position: absolute;
    top: -50px;
    left: -50px;
    visibility:hidden;
}
input[type=checkbox]{
    position: absolute;
    top: -50px;
    left: -50px;
    visibility:hidden;
}
label {
    width: 100%;
    display: block;
    cursor: pointer;
}

input[type=radio]+label {
    border: 1px solid #ccc;
    padding: 8px 16px 6px 16px;
    cursor: pointer;
    background-size: 22px;
    text-align: left !important;
    line-height: 22px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    margin-right: 5px;
    border-radius: 4px;
}

input[type=checkbox]+label {
    border: 1px solid #ccc;
    padding: 8px 16px 6px 16px;
    cursor: pointer;
    background-size: 22px;
    text-align: left !important;
    line-height: 22px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    margin-right: 5px;
    border-radius: 4px;
}
input[type]:checked + label {
    background: #4bb7ff;
    color: #fff;
    font-weight: 600;
    border-color: #4bb7ff;
}

.button-next{
  margin-top: 30px;
  float: right;
  background: #07d4df;
  color: #fff;
  width: 33%;
  margin-bottom: 60px;
  padding: 15px 20px;
  cursor: pointer;
  text-align: center;
  border: 0;
  outline: none;
  font-weight: 600;
  font-size: 1.1em;
  border-radius: 4px;
  -webkit-appearance: button;
  text-transform: none;
  overflow: visible;
  font: inherit;
  margin: 0;
}
.button-next100{
  margin-top: 30px;
  float: right;
  background: #fff;
  color: #000;
  width: 100%;
  margin-bottom: 60px;
  padding: 10px 10px;
  cursor: pointer;
  text-align: center;
  border: 0;
  outline: none;
  font-weight: 900;
  font-size: 1.1em;
  border: 2px solid #07d4df;
  border-radius: 10px;
  -webkit-appearance: button;
  text-transform: none;
  overflow: visible;
  font: inherit;
  margin: 0;
}

.button-next:active{
  background-color: #06bcc6;  
}

.select-next{
  padding: 10px;
  cursor: pointer;
  background: #fff;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #ccc;
  font-size: 1em;
  display: inline-block;
  width: 52%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  color: #3 03030;
  font-family: inherit;
  border-radius: 4px;
}

.select-next1{
  padding: 8px;
  cursor: pointer;
  background: #fff;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #ccc;
  font-size: 1em;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  color: #3 03030;
  font-family: inherit;
  border-radius: 4px;
}

.close-container{
    cursor: pointer;
    position: absolute;
    top: calc(50% - 95px);
    right: 13px;
    border-radius:10px;
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 0px 6px;
    font-size: 16px;
    cursor: pointer;
}

.close-container1{
    cursor: pointer;
    float: right;
    top: calc(50% - 3px);
    right: 13px;
    border-radius:10px;
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 0px 6px;
    font-size: 16px;
    cursor: pointer;
}

.top-number{
    float: left;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin-right: 5px;
    text-align: center;
    color: #000;
    border-radius: 20px;
    background: #fff;
    border: 1px solid #000;
}

.d-active{
  border: 1px solid #4bb7ff;
  background: #4bb7ff;
}

.d-active .top-number{
  color: #4bb7ff;
  background: #fff;
  border-color: #fff;
}

span.error { color: red; }

</style>