<?php
    $page = "login";
    include './Component/head.php';
    include './Component/navbar.php';
?>

    <!-- ---------- sign up Section start ---------- -->

    <section id="login">
        <div class="inner">
            <div class="left">
                <img src="./img/home-img2.svg">
            </div>
            <div class="right">
                <!-- <form action="#" method="get"> -->
                <form action="http://localhost/chandstore/signuplog.php" method="POST">
                    <div class="section-heading">
                        <h1>Sign Up</h1>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" id="fname" name="fname" type="text">
                        <label for="fname"><span class="material-icons">person</span> First Name</label>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" id="lname" name="lname" type="text">
                        <label for="lname"><span class="material-icons">person</span> Last Name</label>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" id="phone" name="phone" type="text">
                        <label for="phone"><span class="material-icons">phone</span> Phone</label>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" id="address" name="address" type="text">
                        <label for="address"><span class="material-icons">map</span> Address</label>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" type="email" name="email" id="email">
                        <label for="email"><span class="material-icons">email</span> Email</label>
                    </div>

                    <div class="input input-box">
                        <input class=" input-box" type="password" name="pass" id="pass1">
                        <label for="pass1"><span class="material-icons">lock</span> New Password</label>
                    </div>

                    <button class="btn" type="submit">Sign up</button>
                    <a class="btn" href="./login.php" id="Signup"> log in</a>
                </form>
            </div>
        </div>
    </section>
    <!-- ---------- sign up Section end ---------- -->

<?php
    include './Component/footer.php';
    include './Component/end.php';
?>