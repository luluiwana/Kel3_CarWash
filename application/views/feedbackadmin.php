 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 input, textarea, .uneditable-input {
    width: 400px;
}
form{
	text-align:center;
}
.checked {
  color: orange;
}
.slider {
  -webkit-appearance: none;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #0066FB;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #0066FB;
  cursor: pointer;
}
 </style>
 
 <?php
 function rate ($value) {

	if($value==1){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	";}
	
		if($value==2){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	";}
	
		if($value==3){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	";}
	
		if($value==4){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star'></span>
	";}
	
		if($value==1){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	<span class='fa fa-star'></span>
	";}
	
		if($value==5){
	$rating= "
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	<span class='fa fa-star checked'></span>
	";}
	
	return $rating;

}
 ?>
 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Feedback</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Feedback</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content" style="padding-left:50px; padding-right:50x">
       <h4> Review Pengguna
       </h4>Tingkat kepuasan seluruh pelanggan 
	   <?php
	   $query = $this->db->query("SELECT (AVG(kualitas)+AVG(lama)+AVG(minuman)+AVG(karyawan)+AVG(lingkungan)+AVG(harga))/6 as rate FROM feedback");
					
					foreach($query->result() as $row){
						echo rate(round($row->rate));
					}
	   ?>
	   <br>
	   <br>
		 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari customer..">
				<table id="myTable"  border="0" cellspacing="0" cellpadding="0" width="100%" class="table table-hover">
					<tr align="left" valign="top">
						<th>Email</th>
						<th>Kualitas Cucian</th>
						<th>Lama Cucian</th>
						<th>Minuman</th>
						<th>Kualitas Karyawan</th>
						<th>Lingkungan</th>
						<th>Harga</th>
						<th>Catatan Pelanggan</th>
						<th>Rating</th>
					</tr>
					
					<?php
					$query = $this->db->query("SELECT *, (kualitas+lama+minuman+karyawan+lingkungan+harga)/6 as review FROM feedback where email<>'adminku' order by id_feedback desc");
					
					foreach($query->result() as $row){
					?>
						<tr align="left" valign="top">
						<td><?php echo $row->email?></td>
						<td><?php echo $row->kualitas?></td>
						<td><?php echo $row->lama?></td>
						<td><?php echo $row->minuman?></td>
						<td><?php echo $row->karyawan?></td>
						<td><?php echo $row->lingkungan?></td>
						<td><?php echo $row->harga?></td>
						<td><?php echo $row->note?></td>
						<td><?php echo rate(round($row->review))?><br><?php echo $row->waktu?></td>
						</tr>
					<?php }?>
					
				</table>

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