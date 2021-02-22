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
    <section>
        <article class="news-readmore-wrapper">
            <header>
                <h2 class="news-readmore-title"><?php echo $article->title; ?></h2>
            </header>

            <div class="news-readmore-content">
                <p class="news-readmore-text"><?php echo $article->content; ?></p>
            </div>
        </article>
    </section>
</main>

<?php require_once 'footer.php'; ?>