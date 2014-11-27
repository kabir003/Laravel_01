<?php
session_start();
//form must be submitted to access this page
if( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ){
	
	$full_name = "";
	$fathers_name = "";
	
	if(array_key_exists('full_name', $_POST)){
		$full_name = $_POST['full_name'];
	}
	
	if(array_key_exists('fathers_name', $_POST)){
		$fathers_name = $_POST['fathers_name'];
	}
	
	
	//$_SESSION['full_name'] = $full_name;
	//$_SESSION['fathers_name'] = $fathers_name;
	if(!array_key_exists('products', $_SESSION )){
		$_SESSION['products'] = array();	
	}
	
	//$length = count($_SESSION['names']);
	//$_SESSION['names'][$length]['full_name'] = $full_name;
	//$_SESSION['names'][$length]['fathers_name'] = $fathers_name;
	
	//$_SESSION['products'][][] = $full_name;
	//$_SESSION['products'][][] = $fathers_name;
	//same
	//$length = count($_SESSION['products']);
	//$_SESSION['products'][$length] = $full_name;
	
	
	$length = 'product'.count($_SESSION['products']);
	//$_SESSION['products'][$length]['productName'] = $full_name;
	//$_SESSION['products'][$length]['productQty'] = $fathers_name;
	
	$_SESSION['products'][$length] = array('productName'=>$full_name, 
										   'productQty'=>$fathers_name
										   );
	//same
	//$_SESSION['products'][] = array('productName'=>$full_name, 
										  // 'productQty'=>$fathers_name
										  // );
	
}else{
	header('location:http://localhost:8080/laravel/understandingCRUD.html');
}

?>

<html>
<head></head>
<body>
<div>
	<dl>
		<dt><b>Full Name</b>:</dt> 
		<dd><span><?php echo $full_name; ?></span></dd>
		
		<dt><b>Fathers Name</b>:</dt> 
		<dd><span><?php echo $fathers_name; ?></span></dd>
		
	</dl>
	<a href="list.php">Go to list</a>
</div>

</body>
</html>

<?php
/*
echo "<html>
<head></head>
<body>
<p>
<span><b>Full Name</b>: $full_name </span>
<br />
<span><b>Fathers Name</b>:  $fathers_name </span>
</p>
</body>
</html>";

echo '<html>
<head></head>
<body>
<p>
<span><b>Full Name</b>:'.$full_name.' </span>
<br />
<span><b>Fathers Name</b>:  '.$fathers_name.' </span>
</p>
</body>
</html>';

echo '--------------------';

echo<<<'BASIS'

<html>
<head></head>
<body>
<p>
<span><b>Full Name</b>:$full_name </span>
<br />
<span><b>Fathers Name</b>: $fathers_name </span>
</p>
</body>
</html>

BASIS

*/
?>







