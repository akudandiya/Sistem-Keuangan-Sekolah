<html>
<table class="table">
                    <thead style="font-size:20px;color:rgb(255,255,255);">
                        <tr>
                            <th> Nama Daycare </th>
                            <th> Alamat </th>
                            <th> Email </th>
                            <th> City </th>
                            <th> Order </th>
                        </tr>
                    <thead>
                    
                    <tbody >
                        <?php
                        
                        $conn = mysqli_connect("localhost", "root", "", "daycare");
                        $result = mysqli_query($conn,"SELECT * FROM users where 'email' LIKE ['email']");
                        
                        while($row = mysqli_fetch_array($result)):
                        
                        ?>
                        
                        <tr>
                            <td><?php echo $row['daycarename']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><a class='btn btn-primary btn-md' data-target="#ordermodal" data-toggle='modal' >Send</a></td>
                        </tr>
                        
                        <?php endwhile; ?>
                    </tbody>
                </table>
                
                <link rel="stylesheet" href="jquery.dataTables.min.css" />
                <script src="tables/js/jquery.js"></script>
                <script src="tables/js/jquery.dataTables.js"></script>
                
                <script src="jquery.dataTables.min.js"></script>
                
                <script>
                    $(".table").DataTable();
                </script>
                <div class="modal fade" role="dialog" tabindex="-1" id="ordermodal" aria-labelledby="emodal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action = "order.php" method="post">
                            <h2 class="text-center" style="color:rgb(0,0,0);">Order</h2>
                            <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Nama"></div>
                            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"></div>
                            <div class="form-group"><input class="form-control" type="text" name="daycare" placeholder="Daycare"></div>
                            <div class="form-group"><textarea class="form-control" rows="14" name="Tambahan" placeholder="Tambahan"></textarea></div>
                            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
</html>