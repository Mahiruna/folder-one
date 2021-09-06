<?php
require_once("AdminFast.php");
require_once ("header.php");


?>

	<div class="container">
			<div class="rows">    
				<div class="col-sm-12">
					<h2 class="tekstit"><center>Menambahkan Data Produk</center></h2>
					<hr>
				</div>
			</div>
			
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				
				<form action="prosesAdminFast.php?ak=proses_tambah_produk" method="post" enctype="multipart/form-data">

          <div class="form-group">
					<label for="recipient-name" class="control-label">Id Produk</label>
					<input name="id_produk" type="number" class="form-control" id="recipient-name" required>
				  </div>
          <div class="form-group">
          <div class="form-group">
					<label for="recipient-name" class="control-label">Nama Produk</label>
					<input name="nama_produk" type="text" class="form-control" id="recipient-name" required>
                  </div>
            <div class="form-group">
					<label for="recipient-name" class="control-label">Harga</label>
					<input name="harga" type="number" class="form-control" id="recipient-name" required>
                  </div>
            <!-- PILIH kategori -->
        	<div class="form-group">
					<label for="recipient-name" class="control-label">Kategori</label>
					<select name="pil_kategori" class="form-control select select-primary" data-toggle="select" required>
						<option VALUE="">PILIH Kategori</option>
                        <option></option>
                        
                                                <option value="L QUEENLY" required>L QUEENLY</option>
                                                <option value="L MTH AKSESORIS (IM)" required>L MTH AKSESORIS (IM)</option>
                                                <option value="CI MTH TINTA LAIN (IM)" required>	CI MTH TINTA LAIN (IM)</option>
												<option value="S MTH STEMPEL (IM)" required>S MTH STEMPEL (IM)</option>
												<option value="L MTH TABUNG (LK)" required>	L MTH TABUNG (LK)</option>
												<option value="SP MTH SPAREPART (LK)" required>	SP MTH SPAREPART (LK)</option>
												
												                  
					  </select>
				  </div>
          <div class="form-group">
                    <label for="recipient-name" class="control-label">Status</label>
                    <br>
                    <input name="status" type="radio" value="bisa dijual" class="radio-inline" id="recipient-name" required> Bisa Dijual
                    
                     <input name="status" type="radio" value="tidak bisa dijual" class="radio-inline" id="recipient-name" required> Tidak Bisa Dijual
			</div>


				<div class="col-md-3">			
					 <div class="form-group">
						<button type="reset"  class="btn btn-default">Reset</button>
						<button type="submit"  class="btn btn-primary">Simpan</button>
					 </div>
				 </div> 
					 
				</form>
			</div>
			
			
			
			
			
    </div>
    <!-- /.container -->
	



<?php require_once("footer.php");?>