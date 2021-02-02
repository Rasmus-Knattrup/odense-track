<?php 
    require_once 'header.php'; 
    require_once 'includes/login.inc.php'; 

    $login = new Login;
?>

<!-- LOGIN MAIN -->
<main class="main">
    <section class="login">
        <form class="login-form" action="" method="post">
            <label class="label" for="username">Brugernavn:</label>
            <input class="login-input" type="text" name="username">

            <label class="label" for="password">Kodeord:</label>
            <input class="login-input" type="password" name="password">

            <button class="login-submit" type="submit" name="submit">Login</button>
        </form>
        <?php
            if ( isset( $_POST["submit"] ) ) {

                try {
                    $login->login( $_POST["username"], $_POST["password"] );
                }
                catch ( Exception $e ) {

                    echo '<div class="error-message">
                        <p class="error-message-title">ERROR:</p>
                        <p class="error-message-text">' . $e->getMessage() . '</p>
                    </div>';

                }

            }
        ?>
    </section>
</main>

<?php include_once 'footer.php'; ?>