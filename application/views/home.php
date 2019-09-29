    <style>

    </style>
	<section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img class="slidee" src="https://autolife.co.nz/wp-content/uploads/2018/03/carwash-header-website.jpg" alt="" title="#caption-1" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Cuci Kendaraan <strong>Sangat Bersih</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
				  <?php 
					if(!$this->session->userdata('email_sesi')){
						echo "<a href='#mySignup' data-toggle='modal' class='btn btn-theme'>Daftar Sekarang</a>";
					}
				  ?>
                  <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Buat <strong>Akun</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="http://localhost/catwash/home/register">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" name="email"required id="inputEmail" placeholder="Email">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nama Lengkap</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" name="nama" required placeholder="Nama lengkap">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Alamat</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" name="alamat" required placeholder="Alamat">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Tanggal Lahir</label>
                    <div class="controls">
                      <input type="date" id="inputEmail" required name="tanggal_lahir" placeholder="Tanggal lahir">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Jenis Kelamin</label>
                    <div class="controls">
                      <select name="gender" required>
					  <option>--gender--</option>
					  <option value="Pria">Pria</option>
					  <option value="Wanita">Wanita</option>
                      </select>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nomor HP</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" required placeholder="Nomor HP" name="no_hp">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" required id="inputSignupPassword" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Konfirmasi Password</label>
                    <div class="controls">
                      <input type="password" required id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">DAFTAR</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
			<?php 
					if(!$this->session->userdata('email_sesi')){
						
					
				  ?>
              <div class="cta-text">
			  
                <h3>Daftar sekarang dan dapatkan promo menarik <span class="highlight"><strong>Catwash</strong></span> sekarang juga!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href='#mySignup' data-toggle='modal'>Daftar Sekarang</a>
              </div>
			  <?php }elseif($this->session->userdata('email_sesi')!='adminku'){?>
			  
			  <?php 
			  
				 $email = $this->session->userdata('email_sesi');
				$Qperiode=$this->db->query("SELECT * FROM customer where email='$email'");
				foreach($Qperiode->result() as $row){
					$periode=$row->periode;
				}
				
				$Qwaktu = $this->db->query("SELECT * FROM riwayat where email='$email' order by id_history desc limit 1");
				foreach($Qwaktu->result() as $row){
					$waktu=$row->waktu_datang;
					
					$date=date_create($waktu);
					date_add($date,date_interval_create_from_date_string("$periode days"));
				
				
				
				  ?>
              <div class="cta-text">
			  <?php if($periode==0){
				  echo "<h3>Anda belum pernah mencuci kendaraan Anda. Jangan lupa mencuci kendaraan Anda di Catwash Carwash";
			  }
			  else{?>
                <h3>Anda mencuci kendaraan setiap <?php echo $periode?> hari sekali. Jangan lupa kunjungi Catwash kami pada  <span class="highlight"><strong><?php echo date('d F Y', strtotime(date_format($date,"Y-m-d"))); ?></strong></span> untuk menjaga kendaraan tetap bersih!</h3>
              </div>
			  <?php }}}?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <b class=" icon-circled icon-64 active">1</b>
                  </div>
                  <div class="text">
                    <h6>Cuci Manual</h6>
                    <p>
                      Mencuci kendaraan dengan menggunakan alat semprot air yang berkekuatan 1 PK, dengan tarif Rp 50 Ribu maka konsumen sudah mendapatkan pelayanan terbaik diantaranya mendapatkan Snow Wash, semir, vakum interior, dan juga dapat karpet kertas.
                    </p>
					<b><u>Tarif 50.000</u></b>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <b class=" icon-circled icon-64 active">2</b>
                  </div>
                  <div class="text">
                    <h6>Cuci Hidrolik</h6>
                    <p>
                      Proses mencuci kendaraan menggunakan hidrolik. Ada hidrolik yang khusus untuk motor dan ada juga khusus untuk mobil, menggunakan alat hidrolik ini proses pencucian biasanya lebih cepat, karena petugasnyapun sangat terbantu dengan alat tersebut. Termasuk sudah difasilitasi seperti vakum Interior, semir ban dan cuci mesin.
                    </p>
                    <b><u>Tarif 100.000</u></b>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <b class=" icon-circled icon-64 active">3</b>
                  </div>
                  <div class="text">
                    <h6>Mesin Otomatis</h6>
                    <p>
                     Mencuci kendaraan menggunakan mesin otomatis bisa menjadi pilihan baru, seiring dengan perkembangan teknologi dibuatlah alat dengan sedemikian rupa sehingga bermanfaat, biasaya Konsumen akan mendapatkan perlindungan cat yang dilakukan secara manual oleh petugas, dan juga pembersihan interior vakum.
                    </p>
                    <u><b>Tarif 160.000</b></u>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <b class=" icon-circled icon-64 active">4</b>
                  </div>
                  <div class="text">
                    <h6>Tenaga Robot</h6>
                    <p>
                     Dalam proses cucian mobil menggunakan robot, si pemilik kendaraan tidak perlu keluar dari mobilnya, cukup di tutup rapat seluruh kaca mobil dan menunggu sampai bersih. Jika bagian dalam mobil ingin di bersihkan juga, maka pemilik kendaraan keluar dari mobilnya. Keunggulan mencuci pakai robot yaitu lebih cepat sehingga menghemat waktu .
                    </p>
                    <b><u>Tarif 250.000</u></b>
                  </div>
                </div>
              </div>
			  
            </div>
          </div>
		  <section >
      <div class="container">
        <div class="row marginbot30">
          <div class="span12">
            <h4 class="heading"><strong>Client</strong> testimonials<span></span></h4>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
       