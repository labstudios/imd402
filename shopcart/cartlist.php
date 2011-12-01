<?php
require_once("checklogin.php");
require_once("dbcon.php");

$cart = $db->query("SELECT * FROM `carts` WHERE `user_id` = '$user->id' AND `active` = 1");
if($cart->num_rows > 0)
{
	$cart = (Object) $cart->fetch_assoc();
	$products = $db->query("SELECT * FROM `carts_has_products` JOIN `products` ON `products`.`id` = `carts_has_products`.`product_id` WHERE `cart_id` = $cart->id ");
	while($product = $products->fetch_assoc())
	{
		$product = (Object) $product;
		echo "
		<div>
			$product->name $product->qty $product->price 
		</div>
		";
	}
}
?>