<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Riwayat</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
              <li class="active">Riwayat</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
		  <button class="btn btn-blue" href="#tambahdata" data-toggle="modal">Tambah Data
		  </button>
		  <!-- Signup Modal -->
            <div id="tambahdata" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Tambah <strong>Data</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="http://localhost/catwash/home/add">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                     <select name="email" required >
					<option value="">--email--</option>
					<?php
					$query = $this->db->query("SELECT * FROM customer where email<>'adminku'");
					
					foreach($query->result() as $row){
					?>
					<option value="<?php echo $row->email?>"><?php echo $row->email?></option>
					<?php }?>
					</select>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Paket</label>
                    <div class="controls">
					<select name="paket" required >
					<option value="">--paket--</option>
					<option value="Cuci Manual">Cuci Manual</option>
					<option value="Cuci Hidrolik">Cuci Hidrolik</option>
					<option value="Mesin otomatis">Mesin Otomatis</option>
					<option value="Tenaga Robot">Tenaga Robot</option>
					</select>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">Jenis Kendaraan</label>
                    <div class="controls">
                      <select name="jenis_kendaraan" required >
					<option value="">--kendaraan--</option>
					<option value="Motor">Motor</option>
					<option value="Mobil">Mobil</option>
					</select>
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputEmail">No Plat</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" required name="no_plat" placeholder="Nomor Plat">
                    </div>
                  </div>
				  
				  
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Input</button>
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
		  <br>
		  <br>
		  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari customer..">
				<table id="myTable"  border="0" cellspacing="0" cellpadding="0" width="100%" class="table table-hover">
					<tr align="left" valign="top">
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Jenis Kendaraan</th>
						<th>No Plat</th>
						<th>Jenis Paket</th>
						<th>Tarif</th>
						<th>Estimasi</th>
						<th>Waktu Datang</th>
						
					</tr>
					
					<?php
					$query = $this->db->query("SELECT * FROM `riwayat` INNER JOIN customer ON riwayat.email=customer.email INNER JOIN paket ON paket.nama_paket=riwayat.paket order by waktu_datang desc");
					
					foreach($query->result() as $row){
					?>
						<tr align="left" valign="top">
						<td><?php echo $row->nama?></td>
						<td><?php echo $row->email?></td>
						<td><?php echo $row->jenis_kendaraan?></td>
						<td><?php echo $row->no_plat?></td>
						<td><?php echo $row->nama_paket?></td>
						<td><?php echo $row->harga?></td>
						<td><?php echo $row->estimasi?> menit</td>
						<td><?php echo $row->waktu_datang?></td>
						</tr>
					<?php }?>
					
				</table>

			</div>
		</div>
	</div>
	</section>
	<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>