 <style>
 input, textarea, .uneditable-input {
    width: 400px;
}
form{
	text-align:center;
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
    <section id="content">
      <div class="container">
       <h4> Review Anda sangat berguna bagi kami untuk terus meningkatkan layanan Carwash
       </h4>
	   <form method="post" accept-charset="utf-8" action="http://localhost/catwash/home/addfeedback">
				<div class="control-group">
                    <label class="control-label" for="">E-Mail</label>
                    <div class="controls">
                       <input class="form-control"  type="text"  required name="email" placeholder="E-mail" value="<?php echo $this->session->userdata('email_sesi');?>">
                    </div>
                  </div>
				  
				  <div class="control-group">
                    <label class="control-label" for="">Kualitas Cucian</label>
                    <div class="controls">
                        <input type="range" value="3" name="kualitas" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
			
                  <div class="control-group">
                    <label class="control-label" for="">Lama Pencucian</label>
                    <div class="controls">
                        <input type="range" value="3" name="lama" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
				   <div class="control-group">
                    <label class="control-label" for="">Minuman yang Disediakan</label>
                    <div class="controls">
                        <input type="range" value="3" name="minuman" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
				  <div class="control-group">
                    <label class="control-label" for="">Karyawan Catwash</label>
                    <div class="controls">
                        <input type="range" value="3" name="karyawan" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
				 <div class="control-group">
                    <label class="control-label" for="">Lingkungan</label>
                    <div class="controls">
                        <input type="range" value="3" name="lingkungan" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
				  <div class="control-group">
                    <label class="control-label" for="">Harga</label>
                    <div class="controls">
                        <input type="range" value="3" name="harga" min="1" max="5" class="slider"> 
                    </div>
                  </div>
				  
				  <div class="control-group">
                    <label class="control-label" for="">Kritik dan Saran</label>
                    <div class="controls">
                        <textarea placeholder="Bagaimana komentar Anda mengenai Catwash Carwash?" name="note"> </textarea>
                    </div>
                  </div>
				 
				 
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn" name="login" value="Sign In" >
                    </div>
				</form>
		</div>
	</div>
	</section>