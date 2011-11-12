<pre>
<?php
$str = "Once when I was very young I caught a dog and fed it some food.";
$pass = "hgyRvn4*";
$email = "gagme.com";

$match = preg_match("/(dog)|(food)/", $str);
var_dump($match);
$passGood = preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\*\#\$!\(\)]).{4,20}$/", $pass);
var_dump($passGood);
$goodMail = preg_match("/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/", $email);
var_dump($goodMail);
$rep = preg_replace("/[aeiouAEIOU]/", "Y", $str);
var_dump($rep);
?>
</pre>