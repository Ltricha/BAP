<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for='subject'>Subject:</label>
    <input type='text' id='subject' name='subject'/>
    <br>
    <label for="from">From:</label>
    <input type='text' id='from' name='from'/>
    <br>
    <br>
    <label for="message">Bericht:</label><br>
    <textarea id="message" name="message" style="width:20em; height:10em;"></textarea>
    <br>
    <input type="submit" name="submit" id="subject"/>

</form>
<?php
if(isset($_POST['subject']) && isset($_POST['from'])) {
    $to = '25163@ma-web.nl';
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $header = 'From:'. $_POST['from'];

    mail($to, $subject, $message, $header);

    echo 'Uw mail is verstuurd.';
}
?>

</body>
</html>