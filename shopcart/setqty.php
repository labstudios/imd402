<?php
require_once("checklogin.php");
require_once("dbcon.php");

$data = (Object) filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$cart = $db->query("SELECT * FROM `carts` WHERE `user_id` = '$user->id' AND `active` = 1");
if($cart->num_rows == 0)
{
	$db->query("INSERT INTO `carts` (`user_id`) VALUES ('$user->id')");
	$cart = $db->query("SELECT * FROM `carts` WHERE `user_id` = '$user->id' AND `active` = 1");
}

$cart = (Object) $cart->fetch_assoc();

$db->query("INSERT INTO `carts_has_products` VALUES ('$cart->id', '$data->id', '$data->quantity') ");

header('Location: index.php');

//------------List cart
//$cartItems = $db->query("SELECT * FROM `carts_has_products` WHERE `cart_id` = '$cart->id' JOIN `products` ON ")