<?php 
    // Header
    require_once 'header.php';
    // News class
    require_once 'includes/news.inc.php';

    // New object
    $news = new News;

    // If the user is not admin(id 1) then they are thrown back to news.php
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
                <textarea name="content" cols="100" rows="20"></textarea>

                <button class="submit" type="submit" name="submit">Insend</button>
            </form>

            <!-- PHP FOR LOGIN -->
            <?php
                if ( isset( $_POST["submit"] ) ) {

                    try {

                        $news->insert_news( $_POST["title"], $_POST["content"] );

                        echo '<div class="login-message insert-message">
                            <p class="login-message-title news-article-title">Success!:</p>
                            <p class="error-message-text news-article-text">Nyhed oprettet!</p>
                        </div>';

                    } catch ( Exception $e ) {

                        echo '<div class="error-message">
                            <p class="error-message-title news-article-title">ERROR:</p>
                            <p class="error-message-text news-article-text">' . $e->getMessage() . '</p>
                        </div>';

                    }
                
                }
            ?>
        </div>
    </section>
    <section class="news-overview">
        <div class="news-header">
            <h1 class="events-title">OVERSIGT OVER NYHEDER</h1>
        </div>

        <!-- CARD PRINTER -->
        <?php

            $rows = $news->print_news();

            foreach ( $rows as $row ) {
                echo '<div class="news-card">
                    <span class="news-overview-date">' . $row->date . '</span>
                    <h2 class="news-article-title">' . $row->title . '</h2>
                    <p class="news-article-text">
                        ' . $row->preview . '...
                    </p>
                    <div class="news-read_more-wrapper margin-g">
                        <a class="news-latest-article-read_more" href="news.readmore.php?id=' . $row->id . '">LÆS MERE</a>
                        <a class="news-latest-article-read_more" href="#">REDIGER</a>
                    </div>
                </div>';
            }
        ?>
    </section>
</main>

<?php require_once 'footer.php'; ?>