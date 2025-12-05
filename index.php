<!DOCTYPE html>
<?php
$textmassa ="";

if(isset($_POST['btn'])){
    $from_hidden=$_POST['hide_me'];
    $from_text=$_POST['skriv'];
    $textmassa=$from_hidden." ".$from_text;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <textarea name="skriv" id="skriv"></textarea>
        <input type="hidden" name="hide_me" value="<?=$textmassa?>">
        <input type="submit" name="btn" value="Skicka in">
    </form>
    <div>
        <h1><?=$textmassa?></h1>
    </div>
</body>
</html>