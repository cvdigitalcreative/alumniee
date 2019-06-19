      <div class="hero-wrap js-fullheight">
        <div class="container-fluid px-0">
          <div class="col-lg-12">
            <div class="col-lg-10 mc">
                 <section class="ftco-section bg-light">
                    <div class="container">
                      <div class="row justify-content-center mb-5">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                          <h2 class="mb-4">Your Profile</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 ftco-animate">
                          <div id="accordion">
                            <div class="row">
                              <div class="col-md-12">
                                <form action="<?= base_url()?>Talent/saveProfile" method="post" id="mylove">
                                  <div class="card" id="21">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown1" href="#menuone" aria-expanded="true" aria-controls="menuone">Isi profile kriteria perusahaan yang anda cari ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menuone" class="collapse show">
                                      <div class="card-body">
                                        <!-- <form> -->
                                          
                                        <div class="card1" id="1">
                                          <div class="card-header1">
                                            <h5>Apa hal yang terpenting bagi anda dalam mencari pekerjaan? <i for="q1"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mb-2">
                                              <input type='radio' value='a' name='q1' id='radio1'/>
                                              <label for='radio1'>Memberikan keluasan dalam saya bekerja</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='b' name='q1'  id='radio2'/>
                                              <label for='radio2'>Kemajuan karir dan prospek promosi</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='c' name='q1'  id='radio3'/>
                                              <label for='radio3'>visi dan misi perusahaan untuk memberikan dampak positif kepada masyarakat</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='d' name='q1'  id='radio4'/>
                                              <label for='radio4'>Budaya Perusahaan yang beragam</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="card1" id="2">
                                          <div class="card-header1">
                                            <h5>ini adalah beberapa contoh deskripsi pekerjaan. Menurut anda mana yang paling cocok untuk anda ?<i for="q2"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mb-2">
                                              <input type='radio' value='a' name='q2' id='radio5'/>
                                              <label for='radio5'>"Bekerja keras,Unggul dan menyusul rekan-rekan anda"</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='b' name='q2'  id='radio6'/>
                                              <label for='radio6'>"Kandidat yang tepat memiliki ketelitian"</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='c' name='q2'  id='radio7'/>
                                              <label for='radio7'>"Kami mencari orang yang kreatif"</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='d' name='q2'  id='radio8'/>
                                              <label for='radio8'>"Anda akan diberikan tanggung jawab tingkat tinggi."</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="card1" id="3">
                                          <div class="card-header1">
                                            <h5>Menurut anda, manakah dari berikut ini hal yang paling penting untuk menuju keberhasilan?<i for="q3"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mb-2">
                                              <input type='radio' value='a' name='q3' id='radio9'/>
                                              <label for='radio9'>Bekerja secara efisien untuk mencapai target anda</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='b' name='q3'  id='radio10'/>
                                              <label for='radio10'>Muncul dengan ide-ide baru dan inovatif</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='c' name='q3'  id='radio11'/>
                                              <label for='radio11'>Membangun hubungan interpersonal yang kuat</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='d' name='q3'  id='radio12'/>
                                              <label for='radio12'>Memiliki kemampuan mengatur orang</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="card1" id="4">
                                          <div class="card-header1">
                                            <h5>Suasana Kantor seperti apa yang anda inginkan ? <i for="q4"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mb-2">
                                              <input type='radio' value='a' name='q4' id='radio13'/>
                                              <label for='radio13'>Memberikan akses ke acara seminar</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='b' name='q4'  id='radio14'/>
                                              <label for='radio14'>Memiliki Perjalanan Tahunan</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='c' name='q4'  id='radio15'/>
                                              <label for='radio15'>Waktu Istirahat yang bebas</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='d' name='q4'  id='radio16'/>
                                              <label for='radio16'>Diijinkan bekerja dirumah</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="card1" id="5">
                                          <div class="card-header1">
                                            <h5>Lingkungan kantor seperti apa yang anda inginkan ?<i for="q5"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mb-2">
                                              <input type='radio' value='a' name='q5' id='radio17'/>
                                              <label for='radio17'>Karyawan beroperasi secara individu, tetapi fokus pada target yang diingikan tim</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='b' name='q5'  id='radio18'/>
                                              <label for='radio18'>Dimana tidak ada dua hari yang sama dalam pekerjaan </label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='c' name='q5'  id='radio19'/>
                                              <label for='radio19'>Dimana target ditetapkan dengan jelas dan ada tenggat waktu untuk menyelesaikannya</label>
                                            </div>
                                            <div class="mb-2">
                                              <input type='radio' value='d' name='q5'  id='radio20'/>
                                              <label for='radio20'>Dimana Membangun hubungan dan kolaborasi sangat penting untuk kesuksesaan</label>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="button-next button1" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="card" id="22">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown2" aria-expanded="false" aria-controls="menutwo">Pekerjaan apa yang anda minat ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menutwo" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="5">
                                          <div class="card-header1">
                                            <h5>Anda ingin bekerja pada bidang ?<i for="s1[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Hardware Engineer' name='s1[]' id='checkbox1'/>
                                              <label for='checkbox1'>Hardware Engineer</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Software Engineer' name='s1[]'  id='checkbox2'/>
                                              <label for='checkbox2'>Software Engineer</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='IT Support' name='s1[]'  id='checkbox3'/>
                                              <label for='checkbox3'>IT Support</label>
                                            </div>
                                          </div>
                                          <div class="card-header1" style="margin-top:10px;">
                                            <h5>Berapa gaji yang anda inginkan ?</h5>
                                          </div>
                                          <div class="">
                                            <select class="select-next" name="salary">
                                               <option value="1000000">Rp. 1.000.000</option>
                                               <option value="2000000">Rp. 2.000.000</option>
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
                                        </div>
                                        <button type="button" class="button-next button2" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="23">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown3" aria-expanded="false" aria-controls="menu3">Lulusan darimanakah anda  ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu3" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="6">
                                          <div class="col-lg-12" style="margin:0px;padding: 0px;">
                                            <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                              <div class="card-header1">
                                                <h5>Universitas <i for="universitas"></i></h5>
                                              </div>
                                              <div class="input-next">
                                                <input type="text" name="universitas">
                                              </div>
                                            </div>
                                            <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                              <div class="card-header1">
                                                <h5>Jurusan</h5>
                                              </div>
                                              <select class="select-next1" name="jurusan">
                                                <option value="sistem komputer">Sistem Komputer</option>
                                                <option value="teknik informatika">Teknik Informatika</option>
                                                <option value="sistem informasi">Sistem Informasi</option>
                                              </select>
                                            </div>
                                            <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                              <div class="card-header1" style="margin-top:10px;">
                                                <h5>Tahun Lulus</h5>
                                              </div>
                                              <div class="input-next">
                                                <select id="selectElementId" class="select-next1" name="tahun_lulus"></select>
                                              </div>
                                            </div>
                                            <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                              <div class="card-header1" style="margin-top:10px;">
                                                <h5>IPK <i for="ipk"></i></h5>
                                              </div>
                                              <div class="input-next">
                                                <input type="number" name="ipk" step="0.01" min="1" max="4">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="button-next button3" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="24">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown4" aria-expanded="false" aria-controls="menu4">Dimana anda ingin bekerja ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu4" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="6">
                                          <div class="card-header1">
                                            <h5>Lokasi <i for="s2[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Banda Aceh" name='s2[]' id='checkbox4'/>
                                              <label for='checkbox4'>Banda Aceh</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Medan" name='s2[]'  id='checkbox5'/>
                                              <label for='checkbox5'>Medan</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Padang" name='s2[]'  id='checkbox6'/>
                                              <label for='checkbox6'>Padang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Pekanbaru" name='s2[]'  id='checkbox7'/>
                                              <label for='checkbox7'>Pekanbaru</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Jambi" name='s2[]'  id='checkbox8'/>
                                              <label for='checkbox8'>Jambi</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Palembang" name='s2[]'  id='checkbox9'/>
                                              <label for='checkbox9'>Palembang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bengkulu" name='s2[]'  id='checkbox10'/>
                                              <label for='checkbox10'>Bengkulu</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bandar Lampung" name='s2[]'  id='checkbox11'/>
                                              <label for='checkbox11'>Bandar Lampung</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Pangkal Pinang" name='s2[]'  id='checkbox12'/>
                                              <label for='checkbox12'>Pangkal Pinang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Tanjung Pinang" name='s2[]'  id='checkbox13'/>
                                              <label for='checkbox13'>Tanjung Pinang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Jakarta" name='s2[]'  id='checkbox14'/>
                                              <label for='checkbox14'>Jakarta</label>
                                            </div>
                                             <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Tanggerang" name='s2[]'  id='checkbox923'/>
                                              <label for='checkbox923'>Tanggerang</label>
                                            </div>
                                             <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bekasi" name='s2[]'  id='checkbox921'/>
                                              <label for='checkbox921'>Bekasi</label>
                                            </div>
                                             <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bogor" name='s2[]'  id='checkbox922'/>
                                              <label for='checkbox922'>Bogor</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Bandung" name='s2[]'  id='checkbox15'/>
                                              <label for='checkbox15'>Bandung</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Semarang" name='s2[]'  id='checkbox16'/>
                                              <label for='checkbox16'>Semarang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Yogyakarta" name='s2[]'  id='checkbox17'/>
                                              <label for='checkbox17'>Yogyakarta</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Surabaya" name='s2[]'  id='checkbox18'/>
                                              <label for='checkbox18'>Surabaya</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Serang" name='s2[]'  id='checkbox19'/>
                                              <label for='checkbox19'>Serang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Denpasar" name='s2[]'  id='checkbox20'/>
                                              <label for='checkbox20'>Denpasar</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Mataram" name='s2[]'  id='checkbox21'/>
                                              <label for='checkbox21'>Mataram</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Kupang" name='s2[]'  id='checkbox22'/>
                                              <label for='checkbox22'>Kupang</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Pontianak" name='s2[]'  id='checkbox23'/>
                                              <label for='checkbox23'>Pontianak</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Palangka Raya" name='s2[]'  id='checkbox24'/>
                                              <label for='checkbox24'>Palangka Raya</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Banjarmasin" name='s2[]'  id='checkbox25'/>
                                              <label for='checkbox25'>Banjarmasin</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Samarinda" name='s2[]'  id='checkbox26'/>
                                              <label for='checkbox26'>Samarinda</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Tanjung Selor" name='s2[]'  id='checkbox27'/>
                                              <label for='checkbox27'>Tanjung Selor</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Manado" name='s2[]'  id='checkbox28'/>
                                              <label for='checkbox28'>Manado</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Palu" name='s2[]'  id='checkbox29'/>
                                              <label for='checkbox29'>Palu</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Makassar" name='s2[]'  id='checkbox30'/>
                                              <label for='checkbox30'>Makassar</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Kendari" name='s2[]'  id='checkbox31'/>
                                              <label for='checkbox31'>Kendari</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Gorontalo" name='s2[]'  id='checkbox32'/>
                                              <label for='checkbox32'>Gorontalo</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Mamuju" name='s2[]'  id='checkbox33'/>
                                              <label for='checkbox33'>Mamuju</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Ambon" name='s2[]'  id='checkbox34'/>
                                              <label for='checkbox34'>Ambon</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Sofifi" name='s2[]'  id='checkbox35'/>
                                              <label for='checkbox35'>Sofifi</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Jayapura" name='s2[]'  id='checkbox36'/>
                                              <label for='checkbox36'>Jayapura</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value="Manokwari" name='s2[]'  id='checkbox37'/>
                                              <label for='checkbox37'>Manokwari</label>
                                            </div>

                                          </div>
                                          
                                        </div>
                                        <button type="button" class="button-next button4" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="25">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown5" aria-expanded="false" aria-controls="menu5">Skils apa yang anda miliki ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu5" class="collapse">
                                      <div class="card-body">
                                        <div class="card1" id="5">
                                          <div class="card-header1">
                                            <h5>Bahasa <i for="s3[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='English' name='s3[]' id='checkbox38'/>
                                              <label for='checkbox38'>English</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Indonesian' name='s3[]'  id='checkbox39'/>
                                              <label for='checkbox39'>Indonesian</label>
                                            </div>
                                          </div>
                                          <div class="card-header1" style="margin-top: 10px;">
                                            <h5>Bahasa Pemograman <i for="s5[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='C' name='s5[]' id='checkbox41'/>
                                              <label for='checkbox41'>C</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='C++' name='s5[]'  id='checkbox42'/>
                                              <label for='checkbox42'>C++</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Java' name='s5[]'  id='checkbox43'/>
                                              <label for='checkbox43'>Java</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='PHP, HTML, CSS' name='s5[]'  id='checkbox44'/>
                                              <label for='checkbox44'>PHP, HTML, CSS</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Objective-C' name='s5[]'  id='checkbox45'/>
                                              <label for='checkbox45'>Objective-C</label>
                                            </div>
                                          </div>

                                          <div class="card-header1" style="margin-top: 10px;">
                                            <h5>Database <i for="s8[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='MySQL' name='s8[]' id='checkbox46'/>
                                              <label for='checkbox46'>MySQL</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Oracle' name='s8[]'  id='checkbox47'/>
                                              <label for='checkbox47'>Oracle</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='PostgreSQL' name='s8[]'  id='checkbox48'/>
                                              <label for='checkbox48'>PostgreSQL</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Cassandra' name='s8[]'  id='checkbox49'/>
                                              <label for='checkbox49'>Cassandra</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='SQL Server' name='s8[]'  id='checkbox50'/>
                                              <label for='checkbox50'>SQL Server</label>
                                            </div>
                                          </div>

                                          <div class="card-header1" style="margin-top: 10px;">
                                            <h5>Framework <i for="s9[]"></i></h5>
                                          </div>
                                          <div class="">
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Android' name='s9[]' id='checkbox51'/>
                                              <label for='checkbox51'>Android</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Angular' name='s9[]'  id='checkbox52'/>
                                              <label for='checkbox52'>Angular</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='Spring' name='s9[]'  id='checkbox53'/>
                                              <label for='checkbox53'>Spring</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='CodeIgniter' name='s9[]'  id='checkbox54'/>
                                              <label for='checkbox54'>CodeIgniter</label>
                                            </div>
                                            <div class="mt-2 checkboxp">
                                              <input type='checkbox' value='React' name='s9[]'  id='checkbox55'/>
                                              <label for='checkbox55'>React</label>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <button type="button" class="button-next button5" style="margin-bottom:20px;"><span class=>Next</span></button>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card" id="26">
                                    <div class="card-header">
                                      <a class="card-link" data-toggle="collapse" id="dropdown6" aria-expanded="false" aria-controls="menu6">Apakah anda memiliki pengalaman pekerjaan ?<span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
                                    </div>
                                    <div id="menu6" class="collapse">
                                      <div id="dynamic_field">
                                        <div class="card-body">
                                          <div class="card1" id="6">
                                            <div class="col-lg-12" style="margin:0px;padding: 0px;">
                                              <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                                <div class="card-header1">
                                                  <h5>Nama Perusahaan <i for="nama_perusahaan[]"></i></h5>
                                                </div>
                                                <div class="input-next">
                                                  <input type="text" name="nama_perusahaan[]">
                                                </div>
                                              </div>
                                              <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                                <div class="card-header1">
                                                  <h5>Jenis Pekerjaan</h5>
                                                </div>
                                                <select class="select-next1" name="pekerjaan_experience[]">
                                                  <option value="sistem komputer">Sistem Komputer</option>
                                                  <option value="teknik informatika">Teknik Informatika</option>
                                                  <option value="sistem informasi">Sistem Informasi</option>
                                                </select>
                                              </div>
                                              <div class="wid50 checkboxp" style="margin:0px;padding: 0px;">
                                                <div class="card-header1" style="margin-top:10px;">
                                                  <h5>Lamanya Bekerja <i for="lamanya_berkerja[]"></i></h5>
                                                </div>
                                                <div class="input-next">
                                                  <input type="text" name="lamanya_berkerja[]">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                        <div class="card-body">
                                          <div>
                                            <button type="button" class="button-next100" id="add" style="margin-bottom: 20px;">Add Experience</button>
                                          </div>
                                          
                                          <button type="submit" class="button-next button6" style="margin-bottom:20px;"><span >Finish</span></button>
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
  <script src="<?= base_url()?>assets/js/jquery.validate.js"></script>
  <script src="<?= base_url()?>assets/js/main.js"></script>
    
  </body>
</html>
<script type="text/javascript">
  var min = 2010,
    max = 2100,
    select = document.getElementById('selectElementId');

    for (var i = min; i<=max; i++){
       var opt = document.createElement('option');
       opt.value = i;
       opt.innerHTML = i;
       select.appendChild(opt);
    }
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
            'q1': {
                required: true
            },'q2': {
                required: true
            },'q3': {
                required: true
            },'q4': {
                required: true
            },'q5': {
                required: true
            },'s1[]': {
                required: true
            },'universitas': {
                required: true
            },'ipk': {
                required: true
            },'s2[]': {
                required: true
            },'s3[]': {
                required: true
            },'s5[]': {
                required: true
            },'s8[]': {
                required: true
            },'s9[]': {
                required: true
            },'nama_perusahaan[]': {
                required: true
            },'lamanya_berkerja[]': {
                required: true
            }
            
        },
        messages: {
            'q1': {
                required: "(You must check at least 1 box)"
            },
            'q2': {
                required: "(You must check at least 1 box)"
            },
            'q3': {
                required: "(You must check at least 1 box)"
            },
            'q4': {
                required: "(You must check at least 1 box)"
            },
            'q5': {
                required: "(You must check at least 1 box)"
            },
            's1[]': {
                required: "(You must check at least 1 box)"
            },
            'universitas': {
                required: "(Required)"
            },
            'ipk': {
                required: "(Required)"
            },
            's2[]': {
                required: "(You must check at least 1 box)"
            },
            's3[]': {
                required: "(You must check at least 1 box)"
            },
            's5[]': {
                required: "(You must check at least 1 box)"
            },
            's8[]': {
                required: "(You must check at least 1 box)"
            },
            's9[]': {
                required: "(You must check at least 1 box)"
            },
            'nama_perusahaan[]': {
                required: "(You must check at least 1 box)"
            },
            'lamanya_berkerja[]': {
                required: "(You must check at least 1 box)"
            }
        },
    });

  $(".button1").click(function() {
    if($("#mylove").valid()){

      $("#dropdown1").attr("aria-expanded","false");
      $("#menuone").toggleClass("show");
      $("#dropdown2").attr("href","#menutwo");
      $("#dropdown2").attr("aria-expanded","true");
      $("#menutwo").toggleClass("show");
    }
  });  

  $(".button2").click(function() {
    if($("#mylove").valid()){
      $("#dropdown2").attr("aria-expanded","false");
      $("#menutwo").toggleClass("show");
      $("#dropdown3").attr("href","#menu3");
      $("#dropdown3").attr("aria-expanded","true");
      $("#menu3").toggleClass("show");
    }      
  });
  
  $(".button3").click(function() {
    if($("#mylove").valid()){
      $("#dropdown3").attr("aria-expanded","false");
      $("#menu3").toggleClass("show");
      $("#dropdown4").attr("href","#menu4");
      $("#dropdown4").attr("aria-expanded","true");
      $("#menu4").toggleClass("show");
    }
  });
  $(".button4").click(function() {
    if($("#mylove").valid()){
      $("#dropdown4").attr("aria-expanded","false");
      $("#menu4").toggleClass("show");
      $("#dropdown5").attr("href","#menu5");
      $("#dropdown5").attr("aria-expanded","true");
      $("#menu5").toggleClass("show");
    }  
  });
  $(".button5").click(function() {
    if($("#mylove").valid()){
      $("#dropdown5").attr("aria-expanded","false");
      $("#menu5").toggleClass("show");
      $("#dropdown6").attr("href","#menu6");
      $("#dropdown6").attr("aria-expanded","true");
      $("#menu6").toggleClass("show");
    }
  });
  $(".button6").click(function() {
    $("#mylove").valid()
  });
});
</script>

<script>
  $(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div class="card-body" id="row'+i+'"><div class="card1" id="6"><div class="col-lg-12" style="margin:0px;padding: 0px;"><div class="wid50 checkboxp" style="margin:0px;padding: 0px;"><div class="card-header1"><h5>Nama Perusahaan <i for="nama_perusahaan[]"></i></h5></div><div class="input-next"><input type="text" name="nama_perusahaan[]"></div></div><div class="wid50 checkboxp" style="margin-left:5px;padding: 0px;"><div class="card-header1"><h5>Jenis Pekerjaan</h5> </div><select class="select-next1" name="jenis_pekerjaan[]"><option value="sistem komputer">Sistem Komputer</option><option value="teknik informatika">Teknik Informatika</option><option value="sistem informasi">Sistem Informasi</option></select></div><div class="wid50 checkboxp" style="margin:0px;padding: 0px;"><div class="card-header1" style="margin-top:10px;"><h5>Lamanya Bekerja <i for="lamanya_berkerja[]"></i></h5></div><div class="input-next"><input type="text" name="lamanya_berkerja[]"></div></div></div><button type="button" id="'+i+'" class="close-container btn_remove"><i class="fa fa-window-close"></i></button></div></div>');
  });

  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
});
</script>

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
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php else:?>
<?php endif;?>

<style type="text/css">
  span.error { color: red; }

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
    top: calc(50% - 99px);
    right: 13px;
    border-radius:10px;
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 0px 6px;
    font-size: 16px;
    cursor: pointer;
}

</style>