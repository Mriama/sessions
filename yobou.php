 <?php
 //session_start();
 $_SESSION['mail'] = 'admin';
 $_SESSION['password'] = 'admin';
 $_SESSION['mail'] = 'user';
 $_SESSION['password'] = 'user';
 ?>
 <!DOCTYPE html>
<html lang="fr">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>login</td>
                <td><input type="text" name="mail" value="" required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" value="" required></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="connection" value="connection"></td>
            </tr>
        </table>
    </form>
    <?php
session_start();
if(isset($_POST['connection'])) {
    extract($_POST);
    if(!empty ($mail) AND !empty($password)  ){

if($mail=='admin' && $password=='admin') {
    header ("location: page.php");
    $_SESSION['$mail']=$mail;
}
elseif($mail=='user' && $password=='user') {
    header ("location: page2.php");
    $_SESSION['$mail']=$mail;

}


}
else {
  echo 'login incorrect';

}
    }

?>
</body>

</html>
<?php
session_destroy();
?>