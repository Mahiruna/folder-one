<?php
require_once("AdminFast.php");
session_start();


require_once("header.php");


?>

<div class="container">
		<div class="rows">    
				<div class="col-sm-12">
					<h2 class="tekstit"><center>Daftar Produk</center></h2>
					<hr>
				</div>
		</div>
		<a class="btn btn-primary" href="index.php">Back</a>
		
		<!-- Button Menambah Produk -->
        <a class="btn btn-primary" href="test_menambah_produk.php">Tambah Produk</a>
</br>

		<div class="col-md-12">
            
			<table class="table"> 
					<!-- kepala table -->
					<thead> 
						<tr> 
							<!-- <th>#</th>  -->
                            <th>Id_Produk</th>
							<th>Nama Produk</th> 
                            <th>Kategori</th>
                            <th>Harga</th>
							<th>Status_Jual</th>
                            <th>Aksi_Produk</th>
						</tr> 
					</thead> 
					<tbody>
					<?php 
					$data = new AdminFast();
					$view = $data->Tmplproduk();	
					$no= 1;
					if($view->rowCount() > 0)
					{
						while ($row = $view->fetch(PDO::FETCH_OBJ)) 
						{
							?>
						<tr>
							<!-- <td><php echo $no++; ></td> -->
							<td><?php echo $row->id_produk; ?></td>
                            <td><?php echo $row->nama_produk; ?></td>
                            <td><?php echo $row->kategori; ?></td>
                            <td><?php echo $row->harga; ?></td>
							<td><?php echo $row->status_jual; ?></td>
							
							<td>
								<!-- Admin -> Menu MANAGEMENT produk -->
                                <a href="verif_edit_produk.php?edit=<?php echo $row->no_produk ;?>"> <i class="fui-new"></i> | </a>
                                <a href="prosesAdminFast.php?ak=hapusproduk&hapusid=<?php echo $row->id_produk ;?>" onclick="return confirm('yakin hapus?')"> <i class="fui-trash"></i> </a>
								
							</td>
							
						</tr>
					<?php
						}
					}

					?>
					</tbody> 
				</table>
			</div>					
		
		
	</div>




