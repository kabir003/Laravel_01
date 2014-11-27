<?php
session_start();
$index = $_GET['index'];
?>

<html>
<head></head>
<body>
<p>
<span><b>Product Name</b>:<?php echo $_SESSION['names'][$index]['full_name']; ?></span>
<br/>
<span><b>Product Qty</b>: <?php  echo $_SESSION['names'][$index]['fathers_name']; ?></span>
</p>
    <a href="list.php">Go to list</a>
</body>
</html>






