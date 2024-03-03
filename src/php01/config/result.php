<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);

print "私の名前は" . $name . "です";
echo "<br/>";

$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
print "ご希望の商品は、" . $radio;
echo "<br/>";

$order = htmlspecialchars($_POST['order'], ENT_QUOTES);
print "注文数は" . $order;
echo "<br/>";
