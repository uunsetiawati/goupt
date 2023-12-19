<br>
<br>
<br>
<section id="contact" class="contact d-flex align-items-center">
	<div class="container">

		<div class="row">
			<div class="col-lg-12 mt-12 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
				<form action="<?= base_url('gocarisertifikat') ?>" method="post" class="php-email-form">
					<div class="form-group">
						<h2>CARI SERTIFIKAT KAMI</h2>
						<hr>
						<label for="name">Masukkan email kamu</label>
						<input type="text" class="form-control" name="kode" value="" placeholder="Ex: fitrah.tep@gmail.com" required />
						<label>Sertifikat yang ingin kamu download</label>
						<select name="keperluan" class="form-control" id="vaksin" required>
							<option value="">Pilihan : </option>
							<option value="Webinar Harkop ke-75">Webinar Harkop ke-75 | Kediri</option>
							<option value="Sarasehan Harkop">Sarasehan Harkop ke-75 | Kediri</option>
							<option value="Seminar Nasional">Seminar Nasional</option>
						</select>
					</div>
					<?php if ($this->session->has_userdata('danger')) { ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<i class="icon fas fa-ban"></i>
								<?= $this->session->flashdata('danger'); ?>
							</div>
						<?php } ?>
					<div class="mb-3">
						<?php if ($this->session->has_userdata('success')) { ?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<i class="icon fas fa-check"></i>
								<?= $this->session->flashdata('success'); ?>
							</div>
						<?php } ?>
					</div>
					<div class="text-center"><button type="submit">CARI SERTIFIKAT</button></div>
				</form>
			</div>
		</div>

	</div>
</section>
