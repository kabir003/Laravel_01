<?php
session_start();
$index = $_GET['index'];
?>


<html>
<body>
<form method="post" action="submit_edit.php">
<fieldset>

    <legend>Edit Your Item</legend>

        <label>Product Name</label>
        <input type= "text" name= "full_name" value=<?php echo $_SESSION['names'][$index]['full_name'];?>>

        <label>Product Qty</label>
        <input type= "text" name= "fathers_name" value=<?php echo $_SESSION['names'][$index]['fathers_name'];?>>

        <input type="submit" value="Submit"/>

</fieldset>
</form>
</body>
</html>

<?php

if(!array_key_exists('oldproduct',$_SESSION)){
    $_SESSION['oldproduct']= array();
}
$_SESSION['oldproduct'][0]['full_name'] = $_SESSION['names'][$index]['full_name'];
$_SESSION['oldproduct'][0]['fathers_name'] = $_SESSION['names'][$index]['fathers_name'];
$_SESSION['edit_index'] = $index;
print_r($_SESSION['oldproduct']);
?>