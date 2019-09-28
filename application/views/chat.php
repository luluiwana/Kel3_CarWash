<?php 
$waktu = time();
?>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		font-family: sans-serif;
		size: 15px;
	}

	#isi{
		margin: auto;
		width: 50%;
		box-sizing: border-box;
		border: solid 1px;
		border-radius: 5px;
	}

	.card-header{
		border: solid 1px;
		background-color: #666666;
		color: white;
		text-align: center;
	}

	.card-footer{
		text-align: center;
	}

	.card-footer > textarea{
		width: inherit;
	}

	.card-body{
		overflow: auto;
		height: 20rem;
	}

	textarea{
		resize: none;
		overflow: auto;
	}

	.col-md-3 > img{
		width: 10%;
		border-radius: 80%;
		border: solid 1px;
	}

	.row > .col-md-auto{
		font-size: 10px;
		margin-left: 100px;
		margin-top: -5px;
	}

	#hasil > .row, .card-body > .row{
		text-align: left;
		border-bottom: solid 2px;
		margin: 10px;
		text-align: initial;
	}

	#pesan{
		width: 40rem;
		height: 5rem;
		margin: 10px;
	}
</style>

<section>
	<div class="card" id="isi" style="width: 50rem;">
		<div class="card-header">
			Customer Services
		</div>

		<div class="card-body">

			<!-- Guna Penjawab -->
			<div class="row">
				<div class="col-md-3">
					<img src="https://myrealdomain.com/images/customer-service-clip-art-5.png">
					Customer Services Tersedia, Silahkan Kirimkan Pesan....
				</div>
				<div class="col-md-auto">
					<?php 
					echo date("h:i",$waktu);
					?>
				</div>
			</div>
			<!-- Guna Penjawab -->





			<!-- Guna Penanya -->

			<!-- <?php foreach ($ngechat as $key => $value): ?>
				<div id="tanya" class="row" style="text-align: right;">
					<div class="col-md-3">
						<?php echo $value->pesan; ?>
						<img src="http://img.clipartlook.com/customer-clipart-cartoon-female-customer-service-customer-service-service-communication-png-image-and-clipart-551.jpg">
					</div>
					<div class="col-md-auto" style="margin-right: 100px;">
						<?php
						echo $value->waktu;
						?>
					</div>
				</div>
				<?php endforeach ?> -->

				<!-- Guna Penanya -->




				<!-- Spawn Q -->
				<div id="hasil">

				</div>
				<!-- Spawn Q -->

			</div>
			<div class="card-footer">
				<input type="text" name="pesan" id="pesan">
				<button id="kirim" class="btn btn-md btn-success">
					KIRIM
				</button>
			</div>
		</div>
	</section>
	<script type="text/javascript">

		// var html_awal = '<div id="tanya" class="row" style="text-align: right;"><div class="col-md-3">';
		// var html_akhir = '<img src="http://img.clipartlook.com/customer-clipart-cartoon-female-customer-service-customer-service-service-communication-png-image-and-clipart-551.jpg"></div><div class="col-md-auto" style="margin-right: 100px;">'+<?php echo date("h:i",$waktu); ?>+'</div></div>';

		$(document).ready(function() {

			var kirim = $('#kirim');
			var hasil = $('#hasil');
			var pesan = $('#pesan');

			var dt = new Date();
			var waktu = dt.getHours()+":"+dt.getMinutes();

			kirim.click(function(){
				hasil.append('<div id="tanya" class="row" style="text-align: right;"><div class="col-md-3">'+pesan.val()+'<img src="http://img.clipartlook.com/customer-clipart-cartoon-female-customer-service-customer-service-service-communication-png-image-and-clipart-551.jpg"></div><div class="col-md-auto" style="margin-right: 100px;">'+waktu+'</div></div>');
			})
		})
	</script>
