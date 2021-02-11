<?php 
    // If the user is not admin(id 1) then they are thrown back to news.php
    if ( empty( $_SESSION["id"] ) || $_SESSION["id"] ==! 1 ) {
        header("Location: news.php");
    }

    // Header
    require_once 'header.php';
    // News class
    require_once 'includes/news.inc.php';
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
                <textarea name="content" cols="100" rows="50"></textarea>

                <button class="submit">Insend</button>
            </form>
        </div>
    </section>
    <section class="news-overview">
        <div class="news-header">
            <h1 class="events-title">OVERSIGT OVER NYHEDER</h1>
        </div>

        <!-- CARD PRINTER -->
        <?php
            $news = new News;
            $rows = $news->print_news();

            foreach ( $rows as $row ) {
                echo '<div class="news-card">
                    <span class="news-overview-date">' . $row->date . '</span>
                    <h2 class="news-article-title">' . $row->title . '</h2>
                    <p class="news-article-text">
                        ' . $row->preview . '...
                    </p>
                    <div class="news-read_more-wrapper margin-g">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                        <a class="news-latest-article-read_more" href="#">REDIGER</a>
                    </div>
                </div>';
            }
        ?>
    </section>
</main>

<?php require_once 'footer.php'; ?>