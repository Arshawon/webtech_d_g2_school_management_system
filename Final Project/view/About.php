<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<?php
$xml=simplexml_load_file("about.xml") or die("Error: Cannot create object");

echo $xml->heading . "<br>";
echo $xml->body;
?>

</body>
</html>