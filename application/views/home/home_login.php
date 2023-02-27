    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('<?= base_url('assets/oneschool/');?>images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">SMKN</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Website ini merupakan website yang dibuat untuk mendata pelanggaran yang telah dilakukan siswa SMKN 1 Tanah Grogot.</p>

                </div>

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?= base_url('home/login');?>" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Sign Up
										</h3>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                      <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                      <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <h3>About SMKN 1 Tanah Grogot</h3>
            <p>SMK Negeri 1 Tanah Grogot semula bernama SMEA Negeri 1 Tanah Grogot, yang mempunyai program keahlian Akuntansi, Perkantoran dan Manajemen Pemasaran yang berdiri Tahun 1991 yang terletak di Jl. Hos Cokroaminoto dengan mempunyai rombongan belajar baru 3 (Tiga). Sejalan dengan perkembangan SMEA Negeri 1 Tanah Grogot berkembang cukup pesat terbukti dengan banyaknya alumni SMP yang berkeinginan menjadi siswa sekolah ini.</p>
          </div>

          <div class="col-md-6 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section">Home</a></li>
              <li><a href="#about-section">About</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
