<br>
<br>
<br>
<section id="contact" class="contact d-flex align-items-center">
    <div class="container">

      <div class="row">        
        <div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch" data-aos-delay="200">
          <form action="<?= base_url('sgo')?>" method="post" class="php-email-form">           
            <div class="form-group">
              <label for="name">Masukkan Kode Pencarian</label>
              <input type="text" class="form-control" name="kode" value="" placeholder="Ex: dokumen-upt" required/>
            </div>                      
            <div class="mb-3">
              <?= $this->session->flashdata('danger');?>
            </div>
            <div class="text-center"><button type="submit">Kunjungi Link</button></div>
          </form>
        </div>
      </div>

    </div>
  </section>