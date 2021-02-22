<?php 
    // Header
    require_once 'header.php';
    // News class
    require_once 'includes/news.inc.php';
?>

<!-- MAIN -->
<main class="main">
    <!-- OVERVIEW OF LATEST NEWS -->
    <section class="news-overview">

        <div class="news-header">
            <h1 class="events-title">NYHEDER</h1>
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
                        <a class="news-latest-article-read_more" href="news.readmore.php?id=' . $row->id . '">LÆS MERE</a>
                    </div>
                </div>';
            }
        ?>

        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>