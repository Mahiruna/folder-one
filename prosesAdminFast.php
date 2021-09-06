<?php
session_start();
require_once("AdminFast.php");
	date_default_timezone_set('Asia/Jakarta');
	
	//ambil aksinya nanti apa
	if($_GET['ak'] && !empty($_GET['ak'])){
		$ak=$_GET['ak'];
		$data = new AdminFast();
		$ip = $_SERVER['SERVER_ADDR'];
		$os = $_SERVER['HTTP_USER_AGENT'];
		$tgl=date("Y-m-d h:i:s");
	}else{
		//kalo ndak ada direct ke index
		?>
		<script>
		window.location="index.php";
		</script>
		<?php
    }
    

	/*=========================================================*/
	////Edit data produk
	/*=========================================================*/
	if($ak=="editproduk"){
		$no = $_GET['edit'];
		$id_produk=$_POST['id_produk'];
		$nm = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$k = $_POST['kategori'];
		$s = $_POST['status'];
		
		$data->edit_produk($no,$id_produk,$nm,$harga,$k,$s);
	
		?>
            <script>
				 alert('Sukses di Edit!');
				window.location.href="test_menampilkan_produk.php";
			</script>
        <?php
	}
    /********************Menghapus Produk FastPrint  **********/
	/*-------------------------------------------------------*/	
    if($ak=="hapusproduk"){
		$a=$_GET['hapusid'];
		$data->hapus_produk($a);
		?>
		<script>
			alert('berhasil hapus!');
			window.location="test_menampilkan_produk.php";
		</script>
		<?php
	}
/******************** Pengisian Formulir Menambahkan Produk FastPrint  **********/
	/*-------------------------------------------------------*/	
	if($ak=="proses_tambah_produk"){
		$id = $_POST['id_produk'];
		$nama = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$kategori = $_POST['pil_kategori'];
		$status = $_POST['status'];
		
	
		$data->tambah_produk($id,$nama,$harga,$kategori,$status);
		
		?>
		<script>
			alert("Berhasil input!");
			window.location="test_menampilkan_produk.php";
		</script>
		<?php
	}
	

?>