<?php
include "inc/koneksi.php";
	if (isset($_GET['no_surat'])) {
		$no_surat = $_GET['no_surat'];

		$select = "SELECT * FROM tb_suratmasuk WHERE no_surat='$no_surat'";
        $qselect = mysql_query($select);
        $data = mysql_fetch_array($qselect);

        if (is_file("img/suratmasuk/".$data['lampiran'])) 
           	unlink("img/suratmasuk/".$data['lampiran']);


        $query2 = "DELETE FROM tb_suratmasuk WHERE no_surat='$no_surat' ";
		$hasilquery = mysql_query($query2);

		if ($hasilquery) {
			?>
			<script language="javascript">
			alert('Data Berhasil Dihapus');
			document.location.href="?page=suratmasuk";</script>
		<?php }
		else{
			echo "gagal hapus";
		}

	}

		?>