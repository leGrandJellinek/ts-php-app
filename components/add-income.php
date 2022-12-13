<? 

if(!empty($_POST) && !empty($_POST["summa"])){
    include_once "./db.php";
    include_once "./functions.php";

    $sum = $_POST["summa"];
    $categ = $_POST["incomtype"];
    $date =  $_POST["date"];
    $time = $_POST["time"];
    $comment = $_POST["comment"];
    

    addCon($sum, $_SESSION['login'], $categ, "Доход" ,$date, $time, $comment);
    header("Location: /?route=table");
}else {
    header("Location: /?route=income");
}