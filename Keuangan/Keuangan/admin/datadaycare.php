
<html>
<table class="table" >
    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
        <tr>
            <th> Nama Daycare </th>
            <th> Email </th>
            <th> Alamat </th>
			<th> City </th>
			
            <th> Edit | Hapus </th>
        </tr>
    <thead>
                    
    <tbody >
        <?php
                        
            $conn = mysqli_connect("localhost", "root", "", "daycare");
            $result = mysqli_query($conn, "SELECT * FROM daycaredata LIMIT 50");
                        
            while($row = mysqli_fetch_array($result)):
                        
        ?>
                        
            <tr style="background-color:rgb(240,240,240,0.3);">
            <td><?php echo $row['daycarename']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['city']; ?></td>
			
			<td><?php echo "<a href='editdaycare.php?id_dc=".$row['id_dc']."'>Edit |</a>";
			echo "<a href='hapusdaycare.php?id_dc=".$row['id_dc']."'> Hapus</a>"; ?></td>
					
            </tr>
                        
        <?php endwhile; ?>
    </tbody>
</table>
                
    <link rel="stylesheet" href="/daycare/tables/css/jquery.dataTables.min.css" />
    <script src="/daycare/tables/js/jquery.js"></script>
    <script src="/daycare/tables/js/jquery.dataTables.js"></script>
                
    <script src="/daycare/tables/js/jquery.dataTables.min.js"></script>
                
    <script>
        $(".table").DataTable();
    </script>
	<div id="editdaycare" class="modal fade text-center">
		<div class="modal-dialog">
			<div class="modal-content">
		</div>
    </div>
</div>  

</html>