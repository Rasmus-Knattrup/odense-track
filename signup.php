<?php 
    // Header
    require_once 'header.php';
    // Login class
    require_once 'includes/login.inc.php'; 

    // New object
    $signup = new Login;

    // When logged in, you return to frontpage
    if ( isset( $_SESSION["id"] ) ) {
        header("Location: index.php");
    }
?>

<!-- SIGN UP MAIN -->
<main class="main">
    <!-- SIGN UP SECTION -->
    <section class="signup">
        <div class="signup-wrapper">
            <!-- SIGN UP FORM -->
            <form class="login-form" action="" method="post">
                <!-- NAME -->
                <label class="label" for="name">Navn:</label>
                <input class="login-input" type="text" name="name">

                <!-- USERNAME -->
                <label class="label" for="username">Brugernavn:</label>
                <input class="login-input" type="text" name="username">

                <!-- PASSWORD -->
                <label class="label" for="password">Kodeord:</label>
                <input class="login-input" type="password" name="password">

                <!-- VALIDATE PASSWORD -->
                <label class="label" for="valid-password">Bekræft Kodeord:</label>
                <input class="login-input" type="password" name="valid-password">

                <!-- EMAIL -->
                <label class="label" for="email">Email:</label>
                <input class="login-input" type="text" name="email">

                <!-- SUBMIT -->
                <button class="login-submit" type="submit" name="submit">Sign up</button>
            </form>
            
            <!-- PHP FOR SIGN UP -->
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

<!-- Footer -->
<?php require_once 'footer.php'; ?>