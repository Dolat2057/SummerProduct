<h1> Send Mail</h1>
<?php
$to = "iashishdwevedi@gmail.com";
$subject = "Summerking Product Quotation";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

echo $message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: info@summerkingindia.com' . "\r\n";
$headers .= 'Cc: iashishdwevedi@gmail.com' . "\r\n";

//$final = mail($to,$subject,$message,$headers);

$final = mail("iashishdwevedi@gmail.com","Test","Test1");



if($final){
    echo "done";
}
else{
    echo "issues";
    echo error_get_last()['message'];
}
?>

