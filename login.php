<?php 
    require_once 'header.php'; 
    require_once 'includes/login.inc.php'; 

    $login = new Login;
?>

<!-- LOGIN MAIN -->
<main class="main">
    <section class="login">
        <div class="login-wrapper">
            <form class="login-form" action="" method="post">
                <label class="label" for="username">Brugernavn:</label>
                <input class="login-input" type="text" name="username">

                <label class="label" for="password">Kodeord:</label>
                <input class="login-input" type="password" name="password">

                <button class="login-submit" type="submit" name="submit">Login</button>
            </form>
            <?php
                if ( isset( $_POST["submit"] ) || isset( $_SESSION["id"] ) ) {

                    try {
                        $login->login( $_POST["username"], $_POST["password"] );

                        echo '<div class="login-message">
                            <p class="login-message-title news-article-title">Success!:</p>
                            <p class="error-message-text news-article-text">Velkommen ' . $_SESSION["name"] . '!</p>
                        </div>';

                        require_once 'includes/logout.inc.php';

                    }
                    catch ( Exception $e ) {

                        echo '<div class="error-message">
                            <p class="error-message-title news-article-title">ERROR:</p>
                            <p class="error-message-text news-article-text">' . $e->getMessage() . '</p>
                        </div>';

                    }

                }
            ?>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>