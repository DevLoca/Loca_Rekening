<style type="text/css">
	.form-control{
		font-size: 10px;
	}
	.control-label{
		font-size: 10px;
	}
</style>

<div class="container pt-3">
	
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header py-0 pt-1 bg-primary">
					<h6 class="font-weight-bold text-white">LANGKAH 1 : Informasi Produk</h6>
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Jenis Produk Tabungan</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-5">
								<select class="form-control">
									<option>-- Pilih Produk --</option>
									<?php foreach($produkTabungan as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Tujuan Pembukaan Tabungan</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-5">
								<select class="form-control">
									<option>-- Pilih Tujuan --</option>
									<?php foreach($tujuanPembukaan as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 mt-2">
			<div class="card">
				<div class="card-header py-0 pt-1 bg-primary">
					<h6 class="font-weight-bold text-white">LANGKAH 2 : Informasi Biodata Pemohon</h6>
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">No Induk Kependudukan</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-5">
								<input type="text" name="" class="form-control" placeholder="Diisi 16 digit NIK KTP">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Nama Lengkap Sesuai KTP</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-5">
								<input type="text" name="" class="form-control" placeholder="Diisi nama pemohon sesuai KTP">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-4">
										<label class="control-label font-weight-bold">Jenis Kelamin</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control">
											<option>-- Pilih --</option>
											<?php foreach($jenisKelamin as $key => $value) { ?>
												<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-4">
										<label class="control-label font-weight-bold">Tempat Lahir</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<input type="text" name="" class="form-control" placeholder="Diisi tempat lahir">
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-4">
										<label class="control-label font-weight-bold">Tanggal Lahir</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<input type="date" name="" class="form-control" placeholder="Tanggal">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Alamat Lengkap Sesuai KTP</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-7">
								<input type="text" name="" class="form-control alamatKTP" placeholder="Diisi alamat sesuai KTP">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Provinsi</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" name="id_provinsi" id="provinsi">
											<option>-- Pilih --</option>
											<?php foreach($provinsi as $key => $value) { ?>
												<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kab/Kota</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" name="id_kota" id="kabupaten">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kecamatan</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" id="kecamatan" name="id_kecamatan">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kelurahan</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" id="kelurahan" name="id_kelurahan">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<div class="checkbox">
                          	<label style="font-size:12px;">
                            	<input type="checkbox" value="" id="checkKTP">&nbsp; Sesuai dengan KTP
                        	</label>
                        </div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Alamat Lengkap Domisili</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-7">
								<input type="text" name="alamat_domisili" class="form-control alamatDomisili" placeholder="Diisi alamat anda saat ini">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Provinsi</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" name="id_provinsi_domisili" id="provinsi_domisili">
											<option>-- Pilih --</option>
											<?php foreach($provinsi as $key => $value) { ?>
												<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kab/Kota</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" name="id_kota_domisili" id="kabupaten_domisili">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kecamatan</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" id="kecamatan_domisili" name="id_kecamatan_domisili">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-3">
										<label class="control-label font-weight-bold">Kelurahan</label>
									</div>
									<div class="col-lg-1">
										<label class="control-label">:</label>
									</div>
									<div class="col-lg-7">
										<select class="form-control" id="kelurahan_domisili" name="id_kelurahan_domisili">
											<option>-- Pilih --</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">No HP Aktif/Whatsapp</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<input type="number" name="" class="form-control" placeholder="+62 81234567">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Email Aktif</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<input type="text" name="" class="form-control" placeholder="email@example.com">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Nama Ibu Kandung</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<input type="text" name="" class="form-control" placeholder="Diisi nama ibu kandung">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Pendidikan Terakhir</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<select class="form-control" name="id_pendidikan" id="pendidikan">
									<option>-- Pilih --</option>
									<?php foreach($pendidikan as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Agama</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<select class="form-control" name="id_agama" id="agama">
									<option>-- Pilih --</option>
									<?php foreach($agama as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label font-weight-bold">Status</label>
							</div>
							<div class="col-lg-1">
								<label class="control-label">:</label>
							</div>
							<div class="col-lg-4">
								<select class="form-control" name="id_status" id="status">
									<option>-- Pilih --</option>
									<?php foreach($status as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		

</div>
</div>

<script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
        $('#provinsi').change(function(){
          var id_provinsi = $("#provinsi").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkabupaten') ?>",
              method : "POST",
              data : {id_provinsi : id_provinsi},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kabupaten').html(html);
              }
            });
        }); 
        $('#provinsi_domisili').change(function(){
          var id_provinsi = $("#provinsi_domisili").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkabupaten') ?>",
              method : "POST",
              data : {id_provinsi : id_provinsi},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kabupaten_domisili').html(html);
              }
            });
        }); 
      });  

		$('#kabupaten').change(function(){
          var id_kota = $("#kabupaten").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkecamatan') ?>",
              method : "POST",
              data : {id_kota : id_kota},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kecamatan').html(html);
              }
            });
        });
        $('#kabupaten_domisili').change(function(){
          var id_kota = $("#kabupaten_domisili").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkecamatan') ?>",
              method : "POST",
              data : {id_kota : id_kota},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kecamatan_domisili').html(html);
              }
            });
        });  

        $('#kecamatan').change(function(){
          var id_kecamatan = $("#kecamatan").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkelurahan') ?>",
              method : "POST",
              data : {id_kecamatan : id_kecamatan},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kelurahan').html(html);
              }
            });
        }); 
        $('#kecamatan_domisili').change(function(){
          var id_kecamatan = $("#kecamatan_domisili").val();
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkelurahan') ?>",
              method : "POST",
              data : {id_kecamatan : id_kecamatan},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                  html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                }
                $('#kelurahan_domisili').html(html);
              }
            });
        }); 
</script>

<script type="text/javascript">

	

	$("#checkKTP").on('change', function() {
		var alamatKTP 	= $(".alamatKTP").val();
		var provinsi 	= $("#provinsi").val();
		var kabupaten	= $("#kabupaten").val();
		var kecamatan	= $("#kecamatan").val();
		var kelurahan	= $("#kelurahan").val();

	  	if ($("#checkKTP").is(':checked')){	
	    	$(".alamatDomisili").val(alamatKTP);
	    	$("#provinsi_domisili").val(provinsi);

	    	$.ajax({
              url : "<?php echo base_url('Pembukaan/getkabupaten') ?>",
              method : "POST",
              data : {id_provinsi : provinsi},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                	if(kabupaten === data[i].id){
                  		html += '<option value="' + data[i].id + '" selected>' + data[i].name +'</option>';
                	}
                	else{
                  		html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                	}
                }
                $('#kabupaten_domisili').html(html);
              }
            });
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkecamatan') ?>",
              method : "POST",
              data : {id_kota : kabupaten},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                	if(kecamatan == data[i].id){
                  		html += '<option value="' + data[i].id + '" selected>' + data[i].name +'</option>';
                	}
                	else{
                  		html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                	}
                }
                $('#kecamatan_domisili').html(html);
              }
            });
            $.ajax({
              url : "<?php echo base_url('Pembukaan/getkelurahan') ?>",
              method : "POST",
              data : {id_kecamatan : kecamatan},
              dataType: 'json',
              async: false,
              success : function(data){
                var html = '';
                var i;
                html += '<option value="">-- Pilih --</option>';
                for(i=0; i<data.length; i++){
                	if(kelurahan == data[i].id){
                  		html += '<option value="' + data[i].id + '" selected>' + data[i].name +'</option>';
                	}
                	else{
                  		html += '<option value="' + data[i].id + '">' + data[i].name +'</option>';
                	}
                }
                $('#kelurahan_domisili').html(html);
              }
            });
	  	}
	  	else {
	    	$(".alamatDomisili").val('');
	    	$("#provinsi_domisili").val('');
	    	$("#kabupaten_domisili").val('');
	    	$("#kecamatan_domisili").val('');
	    	$("#kelurahan_domisili").val('');
	  	}
	});
</script>