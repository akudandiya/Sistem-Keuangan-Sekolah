<table class="table">
	<thead>
		<tr>
			<th> first_name </th>
			<th> last_name </th>
			<th> email </th>
			<th> city </th>
		</tr>
	<thead>
	
	<tbody>
		<?php
		
		$conn = mysqli_connect("localhost", "root", "", "daycare");
		$result = mysqli_query($conn, "SELECT * FROM daycaredata ");
		
		while($row = mysqli_fetch_assoc($result)):
		
		?>
		
		<tr>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['city']; ?></td>
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