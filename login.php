<?php 
    // Header
    require_once 'header.php';
    // Login class
    require_once 'includes/login.inc.php';

    // New object
    $login = new Login;

    // When logged in, you return to frontpage
    if ( isset( $_SESSION["id"] ) ) {
        header("Location: index.php");
    }
?>

<!-- LOGIN MAIN -->
<main class="main">
    <!-- LOGIN SECTION -->
    <section class="login">
        <div class="login-wrapper">
            <!-- LOGIN FORM -->
            <form class="login-form" action="" method="post">
                <!-- USERNAME -->
                <label class="label" for="username">Brugernavn:</label>
                <input class="login-input" type="text" name="username">

                <!-- PASSWORD -->
                <label class="label" for="password">Kodeord:</label>
                <input class="login-input" type="password" name="password">

                <!-- SUBMIT -->
                <button class="submit" type="submit" name="submit">Login</button>

                <!-- SIGN UP -->
                <div>
                    <span class="signup-link">Har du ikke et login? </span>
                    <a class="signup-link" href="signup.php">Sign up</a>
                    <span class="signup-link"> nu!</span>
                </div>
            </form>

            <!-- PHP FOR LOGIN -->
            <?php
                if ( isset( $_POST["submit"] ) ) {

                    try {

                        $login->login( $_POST["username"], $_POST["password"] );

                        echo '<div class="login-message">
                            <p class="login-message-title news-article-title">Success!:</p>
                            <p class="error-message-text news-article-text">Velkommen ' . $_SESSION["name"] . '!</p>
                        </div>';

                        header("Refresh:1");

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

<!-- Footer -->
<?php include_once 'footer.php'; ?>