<aside class="aside">
    <a href="/"><img src="./assets/images/logo.png" alt="" class="logo"></a>
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
    <button class="aside__photo login-ava">
    </button>
</aside>


<script>
const loginAvatar = document.querySelector(".login-ava")

loginAvatar.addEventListener("click", () => {
    bg.classList.add("active");
    formContainer.classList.add("active");
})

</script>