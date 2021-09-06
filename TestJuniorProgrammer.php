<?php
session_start();
require_once ("header-1.php");

//  $sumber = 'http://ppid.jakarta.go.id/json?url=http://data.jakarta.go.id/dataset/06f19910-82c3-428f-9e13-14d848486f69/resource/a7cc5803-9993-427b-a3df-9745a233b38d/download/Lomba-bercerita-anak-TerbaikEdited.csv';
 $sumber ='https://gist.githubusercontent.com/FastPrintProg3/dec91c65f573d09a6e7836c65ae54e73/raw';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Ambil Data JSON - Menampilkan ".count($data)." Data Produk</h1>";
 echo "<br/>";
?>




<!--coba-->
<div>
<table border="1">
  <tr>
   <th>No</th>
   <th>ID Produk</th>
   <th>Nama Produk</th>
   <th>Kategori</th>
   <th>Harga</th>
   <th>Status</th>
  <?php   
//   $no=1;
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    // print "<td>".$no++."</td>";
    // menampilkan
    print "<td>".$data[$a]['no']."</td>";
     print "<td>".$data[$a]['id_produk']."</td>";
    print "<td>".$data[$a]['nama_produk']."</td>";
     print "<td>".$data[$a]['kategori']."</td>";
      print "<td>".$data[$a]['harga']."</td>";
       print "<td>".$data[$a]['status_jual']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</div>
    
</div>
