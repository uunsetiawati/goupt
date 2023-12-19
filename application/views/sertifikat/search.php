<br>
<br>
<br>
<section id="contact" class="contact d-flex align-items-center">
	<div class="container">

		<div class="row">
			<div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">				
				<form action="<?= base_url('scert') ?>" method="post" class="php-email-form">
					<div class="form-group">
					<h2>VALIDASI E-SERTIFIKAT UPTKUKMJATIM</h2>
					<hr>
						<label for="name">Masukkan ID Sertifikat</label>
						<input type="text" class="form-control" name="kode" value="" placeholder="Ex: UPT-SEMINAR-2021/1" required />
					</div>
					<div class="mb-3">
						<?php if ($this->session->has_userdata('danger')) { ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<i class="icon fas fa-ban"></i>
								<?= $this->session->flashdata('danger'); ?>
							</div>
						<?php } ?>

						<?php if ($this->session->has_userdata('success')) { ?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<i class="icon fas fa-check"></i>
								<?= $this->session->flashdata('success'); ?>								
							</div>
						<?php } ?>
					</div>
					<div class="text-center"><button type="submit">VALIDASI</button></div>
				</form>
			</div>
		</div>

	</div>
</section>
