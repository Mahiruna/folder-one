<?php
Class AdminFast
{
	/*=========================================================*/
	/*koneksine*/
	
	public function __construct()
	{
		  $this->db = new PDO('mysql:host=localhost;dbname=u5261892_testjuniorp','u5261892_sister','wcd79bcLKF8DSM3');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
		
	/*=========================================================*/


/*==========================================*/
	/*Ubah data produk  */
/*========================================*/
public function	edit_produk($no,$id,$nm,$harga,$k,$sts)
	{
			try{
				$stmt = $this->db->prepare('UPDATE tb_produk
									     SET id_produk=:id,
									     nama_produk=:nm,
										 harga=:harga,
										 kategori=:k,
										 status_jual=:sts
								       WHERE no_produk=:nom');
			
			$stmt->bindParam(':nom',$no);
			$stmt->bindParam(':id',$id);
			$stmt->bindParam(':nm',$nm);
			$stmt->bindParam(':harga',$harga);
			$stmt->bindParam(':k',$k);
			$stmt->bindParam(':sts',$sts);
			$stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	}


  /*=========================================================*/
    /*Hapus Data Produk*/
    /*=========================================================*/
    public function hapus_produk($id)
	{
		$st_hpsukm = $this->db->prepare('delete from tb_produk where id_produk=:id');
		$st_hpsukm->bindParam(':id',$id);
		$st_hpsukm->execute();
    }
    
  /*=========================================================*/
    /*Proses Mengubah Data Produk*/
    /*=========================================================*/
public function cari_data_produk($no){	
	$stmta = $this->db->prepare("SELECT * FROM tb_produk where no_produk=:id");
	$stmta->execute(array(":id"=>$no));
	$editRowa=$stmta->fetch(PDO::FETCH_ASSOC);
	return $editRowa;
}



	/*=========================================================*/
    /*Proses Menambahkan Produk*/
    /*=========================================================*/
	public function tambah_produk($id,$nama,$harga,$kategori,$status){
		
		$st_cekid = $this->db->prepare('SELECT * FROM tb_produk where id_produk=:cekid');
		$st_cekid->bindParam(':cekid',$id);
		$st_cekid->execute();
		
			if($st_cekid->rowCount() > 0)
			{
				?>
				<script>
					alert('Ups ID produk sudah ada, Check Kembali ID Produk!');
					window.location.href='test_menambah_produk.php';
				</script>
			<?php
			}
			else
			{
			
					try
					{
						$st_krm = $this->db->prepare('INSERT INTO tb_produk(id_produk,nama_produk,
                        harga,kategori,status_jual)
						values(:cekid,:nm,:hrg,:kat,:sj)');
						$st_krm->bindParam(':cekid',$id);
                        $st_krm->bindParam(':nm',$nama);
                        $st_krm->bindParam(':hrg',$harga);
                        $st_krm->bindParam(':kat',$kategori);
                        $st_krm->bindParam(':sj',$status);
						$st_krm->execute();

						?>
						<script>
							alert('Produk Berhasil Ditambahkan');
							window.location.href='test_menampilkan_produk.php';
						</script>
						<?php
					}
					catch(PDOException $e)
					{
						echo $e->getMessage();
					}
						
			}
			
	}

	


	public function Tmplproduk()
	{
		$query = $this->db->query("Select * from tb_produk where status_jual='bisa dijual' ");
		return $query;
	}
	
	// Tampilkan semua /All produk
	public function Tampilproduk()
	{
		$query = $this->db->query("Select * from tb_produk");
		return $query;
	}

	
}
?>