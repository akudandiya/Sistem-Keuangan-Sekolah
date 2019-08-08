<html>
<table class="table">
                    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
                        <tr>
                            <th> Id </th>
                            <th> Email </th>
							<th> Password (MD5) </th>
							<th> Nama </th>
                            <th> Alamat </th>
							<th> No Telpon </th>
                            <th> Edit | Hapus </th>
                        </tr>
                    <thead>
                    
                    <tbody >
                        <?php
                        
                        $conn = mysqli_connect("localhost", "root", "", "daycare");
                        $result = mysqli_query($conn, "SELECT * FROM users ");
                        
                        while($row = mysqli_fetch_array($result)):
                        
                        ?>
                        
                        <tr style="background-color:rgb(240,240,240,0.3);">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
							<td><?php echo $row['No_tel']; ?></td>
							<td><?php echo "<a href='editusers.php?id=".$row['id']."'>Edit</a> | ";
							echo "<a href='hapususers.php?id=".$row['id']."'>Hapus</a>"; ?></td>
					
                        </tr>
                        
                        <?php endwhile; ?>
                    </tbody>
                </table>
                
                
                
                <script>
                    $(".table").DataTable();
                </script>
                
</html>