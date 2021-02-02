<?php 
    include_once 'header.php'; 
    include_once 'includes/login.inc.php'; 

    $login = new Login;
?>

<!-- LOGIN MAIN -->
<main class="main">
    <section class="login">
        <form class="login-form" action="" method="post">
            <input class="login-input" type="text" name="username">
            <input class="login-input" type="password" name="password">
            <button class="login-submit" type="submit" name="submit">Login</button>
            <?php
                if ( isset( $_POST["submit"] ) ) {

                    $login->login( $_POST["username"], $_POST["password"] );

                }
            ?>
        </form>
    </section>
</main>

<?php include_once 'footer.php'; ?>