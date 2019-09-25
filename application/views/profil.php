<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Profil Customer</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
              <li class="active">Profil Customer</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
		  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari customer..">
				<table id="myTable"  border="0" cellspacing="0" cellpadding="0" width="100%" class="table table-hover">
					<tr align="left" valign="top">
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Tgl Lahir</th>
						<th>No HP</th>
						<th>Alamat</th>
						<th>Periode</th>
					</tr>
					
					<?php
					$query = $this->db->query("SELECT * FROM customer where email<>'adminku' order by nama asc");
					
					foreach($query->result() as $row){
					?>
						<tr align="left" valign="top">
						<td><?php echo $row->nama?></td>
						<td><?php echo $row->email?></td>
						<td><?php echo $row->gender?></td>
						<td><?php echo $row->tanggal_lahir?></td>
						<td><?php echo $row->no_hp?></td>
						<td><?php echo $row->alamat?></td>
						<td><?php echo $row->periode?> hari sekali</td>
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