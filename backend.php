<html>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$text = $name."\n".$email."\n".$subject;

$numFile = fopen("./msgFiles/num.txt", "r");
$num = fread($numFile, filesize("./msgFiles/num.txt"));
$num = $num + 1;
fclose($numFile);

$numFile = fopen("./msgFiles/num.txt", "w");
fwrite($numFile, $num);
fclose($numFile);

$textFile = fopen("./msgFiles/".$num.".txt", "w");
fwrite($textFile, $text);
fclose($textFile);
?>
<body>
<script>
window.open("contact-page.html", "_self");
</script>
</body>
</html>
