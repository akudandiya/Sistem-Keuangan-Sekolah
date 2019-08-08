<html>
<table class="table">
                    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
                        <tr>
							<th> Id Message </th>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Message </th>
                            <th> Edit | Hapus </th>
                        </tr>
                    <thead>
                    
                    <tbody >
                        <?php
                        
                        $conn = mysqli_connect("localhost", "root", "", "daycare");
                        $result = mysqli_query($conn, "SELECT * FROM contactus ");
                        
                        while($row = mysqli_fetch_array($result)):
                        
                        ?>
                        
                        <tr style="background-color:rgb(240,240,240,0.3);">
							<td><?php echo $row['id_msg']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['message']; ?></td>
							<td><?php echo "<a href='form-edit.php?id=".$row['email']."'>Edit</a> | ";
							echo "<a href='hapuscontactus.php?id=".$row['id_msg']."'>Hapus</a>"; ?></td>
					
                        </tr>
                        
                        <?php endwhile; ?>
                    </tbody>
                </table>
                
                
                
                <script>
                    $(".table").DataTable();
                </script>
                
</html>