<?

include_once "./components/functions.php";
include_once "./components/header.php";
include_once "./components/aside.php";
include_once "./components/reg.php";
if($pages[$route]) {
    include_once "./pages/$route.php";
} else if($route === "main"){
    include_once "./pages/main.php";
}else {
    include_once './pages/404.php';
}
include_once "./components/footer.php";