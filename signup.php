<?php 
    require_once 'header.php'; 
    require_once 'includes/login.inc.php'; 

    $signup = new Login;
?>

<main class="main">
    <section class="signup">
        <div class="signup-wrapper">
            <form class="login-form" action="" method="post">
                <label class="label" for="name">Navn:</label>
                <input class="login-input" type="text" name="name">

                <label class="label" for="username">Brugernavn:</label>
                <input class="login-input" type="text" name="username">

                <label class="label" for="password">Kodeord:</label>
                <input class="login-input" type="password" name="password">

                <label class="label" for="valid-password">Bekræft Kodeord:</label>
                <input class="login-input" type="password" name="valid-password">

                <label class="label" for="email">Email:</label>
                <input class="login-input" type="text" name="email">

                <button class="login-submit" type="submit" name="submit">Sign up</button>
            </form>
            <?php
                if ( isset( $_POST["submit"] ) ) {

                    try {
                        $signup->signup( $_POST["name"], $_POST["username"], $_POST["password"], $_POST["valid-password"], $_POST["email"] );

                        echo '<div class="login-message">
                            <p class="login-message-title news-article-title">Success!:</p>
                            <p class="error-message-text news-article-text">Velkommen ' . $_SESSION["name"] . '!</p>
                        </div>';

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

<?php require_once 'footer.php'; ?>