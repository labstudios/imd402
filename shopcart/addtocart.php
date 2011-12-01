<?php
	require_once("checklogin.php");
	require_once("dbcon.php");
	
	if(!$loggedin)
	{
		header('Location: index.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add to cart</title>
</head>
<body>
    <?php
    	if(isset($_GET['prod']))
    	{
    		$getData = (Object) filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    		$prodRef = $db->query("SELECT * FROM `products` WHERE `id` = ".$getData->prod);
    		$product = (Object) $prodRef->fetch_assoc();
    	}
    ?>
    <form action="setqty.php" enctype="multipart/form-data" method="post">
    	<input name="id" type="hidden" value="<?php echo $product->id; ?>" />
    	<?php echo $product->name; ?>
    	<input name="quantity" value="1" />
    	<input type="submit">
    </form>
</body>
</html>