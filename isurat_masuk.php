<?php 

include "inc/koneksi.php";

	if (isset($_POST['simpan'])) {
	    $no_surat = $_POST['no_surat'];
	    $no_agenda = $_POST['no_agenda'];
	    $asal_surat = $_POST['asal_surat'];
	    $perihal = $_POST['perihal'];
	    $tgl_surat = $_POST['tgl_surat'];
	    $kepada = $_POST['kepada'];
	    $keterangan = $_POST['keterangan']; 

	    $lampiran = $_FILES['lampiran']['name'];
	    $tmp = $_FILES['lampiran']['tmp_name'];

	    $ek = explode(".", $lampiran);
	    $fotobaru ="srtmsk-".date('dmYHis').".".end($ek);

	    $path = "img/suratmasuk/".$fotobaru;

	    if (move_uploaded_file($tmp, $path)) {
	    	
	    	$select = "INSERT INTO tb_suratmasuk VALUES ('$no_surat','$no_agenda','$asal_surat','$perihal','$tgl_surat','$kepada','$keterangan','$fotobaru' )";
	    	$qselect = mysql_query($select);

	    	if ($qselect){
	    		?>
	    		 <script language="JavaScript">
				 	alert('Data Berhasil Disimpan');
				 	document.location.href="?page=suratmasuk";
				 </script>
				 <?php }

	    	else{
	    		echo "maaf";
	    		
	    	}
	    }else{
	    	echo "maff";
	    	
	    }

	}

	    ?>