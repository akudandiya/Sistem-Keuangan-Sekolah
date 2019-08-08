<html>
<table class="table">
    <thead style="font-size:20px;color:rgb(255,255,255);background-color:rgb(40,45,50);">
        <tr>
            <th> Nama Daycare </th>
            <th> Email </th>
            <th> Alamat </th>
			<th> City </th>
            <th> Order </th>
        </tr>
    <thead>
    <tbody >
		<?php
			
            $conn = mysqli_connect("localhost", "root", "", "daycare");
            $result = mysqli_query($conn, "SELECT * FROM daycaredata ");
                        
            while($row = mysqli_fetch_assoc($result)):
        ?>
    <tr style="background-color:rgb(240,240,240,0.3);">
        <td><?php echo "<a href='deskripsi.php?daycarename=".$row['daycarename']."'>".$row['daycarename'];"</a>"; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['city']; ?></td>
        <td><a class="btn btn-light action-button" data-target="#ordermodal" data-toggle='modal' style="background-color:rgb(51, 204, 255);">Send</a></td>
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
				
	<div class="visible" style="background-image:url(&quot;linier-gradient&quot;);">
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
				</div>
            </div>
        </div>
			
	</div>			
</html>