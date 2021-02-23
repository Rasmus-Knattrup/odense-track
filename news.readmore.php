<?php
    if ( empty( $_GET["id"] ) ) {
        header("Location: news.php");
    }
    // Header
    require_once 'header.php';
    // News class
    require_once 'includes/news.inc.php';

    // New object
    $news = new News;
    $article = $news->read_news( $_GET["id"] );
?>

<main class="main">
    <section class="news-readmore-wrapper">
        <article>
            <header>
                <h2 class="news-readmore-title"><?php echo $article->title; ?></h2>
                <span class="news-readmore-date"><?php echo $article->date; ?></span>
            </header>

            <div class="news-readmore-content">
                <p class="news-readmore-text"><?php echo $article->content; ?></p>
            </div>

            <p class="signup-link-text">Læs flere nyheder <a class="signup-link" href="news.php">her</a>!</p>
        </article>
    </section>
</main>

<?php require_once 'footer.php'; ?>