<html>
<table class="table table-responsive-md table-striped text-center">
    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
        <tr>
            <th> NIS</th>
            <th> Nama </th>
            <th> kelas </th>
			<th> Bayar </th>
        </tr>
    <thead>
    <tbody >
	<?php
		include 'config.php';
		$query = $db->prepare("SELECT * FROM siswa");
		$query->execute();
		$data = $query->fetchAll();
		foreach ($data as $row):
	?>
    <tr style="background-color:rgb(240,240,240,0.3);">
        <td><?php echo $row['nis']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['kelas']; ?></td>
		<td><?php echo "<a class='btn btn-primary' style='background-color:rgb(25,132,231);' href='dalangsiswa.php?nis=".$row['nis']."'>Bayar</a>";?></td>
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