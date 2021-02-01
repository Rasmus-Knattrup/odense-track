<?php 
    include_once 'header.php'; 
    include_once 'includes/login.inc.php'; 
    session_start();
    $login = new Login;
?>

<!-- LOGIN MAIN -->
<main class="main">
    <div>
        <form action="" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <button type="submit" name="submit">Login</button>
            <?php
                if ( isset( $_POST["submit"] ) ) {
                    $login->login($_POST["username"], $_POST["password"]);
                    echo 'Hello ' . $_SESSION["name"];
                }
            ?>
        </form>
    </div>
</main>

<?php include_once 'footer.php'; ?>