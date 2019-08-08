<html>
<table class="table table-responsive-md table-striped text-center">
    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
        <tr>
            <th> No</th>
			<th> NIS</th>
            <th> Tanggal </th>
            <th> Jumlah Uang </th>
			<th> Hapus </th>
        </tr>
    <thead>
    <tbody >
	<?php
    include 'config.php';
		if(!isset($_GET['nis'])){
        die("Error: NIS Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM daftarulang WHERE nis = :nis");
    $query->bindParam(":nis", $_GET['nis']);
    $query->execute();
	$data = $query->fetchAll();
	$no = 1;
	foreach ($data as $row): 
	?>
    <tr style="background-color:rgb(240,240,240,0.3);">
		<td><?php echo $no; ?></td>
        <td><?php echo $row['nis']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['uang']; ?></td>
		<td><?php echo "<a class='btn btn-primary' style='background-color:rgb(25,132,231)' href='dalanghapus.php?nis=".$row['nis']."' >Hapus</a>"; ?></td>
    </tr>
                        
        <?php endforeach; ?>
    </tbody>
        </table>
                
            <link rel="stylesheet" href="/keuangan/tables/css/jquery.dataTables.min.css" />
            <script src="/keuangan/tables/js/jquery.js"></script>
            <script src="/keuangan/tables/js/jquery.dataTables.js"></script>   
            <script src="/keuangan/tables/js/jquery.dataTables.min.js"></script>
                
            <script>
                $(".table").DataTable();
            </script>
</html>