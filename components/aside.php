<aside class="aside">
    <a href="/"><img src="./assets/images/logo.png" alt="" class="logo"></a>
    <?if($_SESSION['login']):?>
        <ul class="aside__menu">
            <?foreach($pages as $link => $value):?>
                <?if($value['icon']):?>
                <li>
                    <a href="/?route=<?= $link?>" class="aside__menu-link <?= $link == $route ? 'active' : '' ?>">
                        <i class="<?= $value['icon']?>"></i>
                    </a>
                </li>
                <?endif;?>
            <?endforeach;?>
        </ul>
    <?endif;?>
    <?if(!$_SESSION['login']):?>
    <button class="aside__photo login-ava">
    </button>
    <?elseif($_SESSION['login']):?>
        <a href="./components/user-sign.php" class="aside__photo leave-ava">
        <img src="./assets/images/<?= $_SESSION['photo']?>">
        </a>
    <?endif;?>
</aside>


<script>
const loginAvatar = document.querySelector(".login-ava")
const leaveAvatar = document.querySelector(".leave-ava");

if(loginAvatar){
    loginAvatar.addEventListener("click", () => {
    bg.classList.add("active");
    formContainer.classList.add("active");
})
}


</script>