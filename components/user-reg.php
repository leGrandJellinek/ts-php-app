<?
if(!empty($_POST) && !empty($_POST['login'])) {
    include_once './db.php';
    
    $userName = $_POST['login'];
    $photoName = "photo.png";
    $user = userReg($userName, $_POST['pass'], $_POST['name'], $photoName);
    header('Location: /');
}
else {
    header('Location: /');
}