<?php 
    require_once 'header.php';
    if ( empty( $_SESSION["id"] ) || $_SESSION["id"] ==! 1 ) {
        header("Location: news.php");
    }
?>

<!-- MAIN -->
<main class="main">
    <section class="news-editor">
        <div class="news-header">
            <h1 class="events-title">INDSÆT NYHEDER</h1>
        </div>

        <div class="news-form-wrapper">
            <form class="news-form" action="" method="post">
                <label class="label" for="title">Titel:</label>
                <input name="title" type="text">

                <label class="label" for="content">Indhold:</label>
                <input name="content" type="textarea">
            </form>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>