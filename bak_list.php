<?php
session_start();
$length = count($_SESSION['products']);
?>

<html>
<head></head>
<body>
<div>
	<!-- Use proper table format -->
	<table border="1">
		<thead>
			<tr>
				<th>Sl</th>
				<th>Procuct Name</th>
				<th>Procuct Qty</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		
		<?php
			for($i=0; $i < $length; $i++):
		?>	
			<tr>
				<td><?=$i+1?></td>
				<td><?=$_SESSION['products']['product'.$i]['productName']?></td>
				<td><?=$_SESSION['products']['product'.$i]['productQty']?></td>
				<td><a href='edit.php'>Edit</a> | <a href='delete.php'>Delete</a> | <a href='show.php'>Show</a></td>
			</tr>
		<?php
			endfor;
		?>
			
				
		</tbody>
	
	</table>
	
	<ul>
		<li><a href="add.html">Add new</a></li>
	</ul>
</div>

</body>
</html>




