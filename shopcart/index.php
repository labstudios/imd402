<?php 
require_once("checklogin.php");
require_once("dbcon.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Database Example</title>
</head>
<body>
	This is some text.<br />
	
	
	<div>
		<h3>Sign up</h3>
		<form action="signup.php" method="post" enctype="multipart/form-data">
			User name: <input type="text" name="username" /><br />
			Password: <input type="password" name="pass" /><br />
			Confirm: <input type="password" name="pass2" /><br />
			<input type="submit" />
		</form>
	</div>
	<div class="products">
	<?php 
		$productRef = $db->query("SELECT * FROM `products` WHERE `instock` > 0");
		
		while($product = $productRef->fetch_assoc())
		{
			?>
			<div class="product">
				<strong><?php echo $product['name']; ?></strong> <?php echo $product['description']; ?>
				$<?php echo $product['price']; ?>
				<?php if($loggedin){?>
					<a href="addtocart.php?prod=<?php echo $product['id']; ?>">Add to cart</a>
				<?php } ?>
			</div>
			<?php
		}
	?>
	
	</div>
	
	<div class="cart">
	<?php include("cartlist.php"); ?>
	</div>
</body>
</html>