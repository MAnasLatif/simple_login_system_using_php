<?php
    $page = "login";
    include './Component/head.php';
    include './Component/navbar.php';
?>
<!-- ---------- login Section start ---------- -->

<section id="login">
    <div class="inner">
        <div class="left">
            <img src="./img/home-img2.svg">
        </div>
        <div class="right">
            <form action="http://localhost/chandstore/loginlog.php" method="POST">
                <div class="section-heading">
                    <h1>Login</h1>
                </div>
                <div class="input name">
                    <input id="name" class="input-box " type="text" name="email">
                    <label for="name"><span class="material-icons">person</span> Username / Email</label>
                </div>
                <div class="input pass">
                    <input class=" input-box" type="password" id="pass" name="pass">
                    <label for="pass"><span class="material-icons">lock</span> Password</label>
                </div>
                <button class="btn" type="submit">Log In</button>
                <a class="btn" href="./signup.php" id="Signup"> Sign Up</a>
            </form>
        </div>
    </div>
</section>
<!-- ---------- login Section end ---------- -->
<?php
    include './Component/footer.php';
    include './Component/end.php';
?>