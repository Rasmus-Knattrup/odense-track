<?php 
    // Header
    require_once 'header.php';
    // Events class
    require_once 'includes/events.inc.php';

    // New object
    $events = new Events;
?>

<!-- MAIN -->
<main class="main">
    <!-- OVERVIEW OF LATEST NEWS -->
    <section class="news-overview">

        <div class="news-header">
            <h1 class="events-title">EVENTS</h1>
        </div>

        <div class="events-card">
            <div class="events-img">
                <img src="img/kalender.png" alt="">
            </div>
            <div class="events-card-content">
                <h2 class="news-article-title">EVENTS KALENDER</h2>
                <p class="news-article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed pretium in massa vestibulum posuere. Nulla aliquet, 
                    tortor sed sollicitudin tem...
                </p>
                <div class="news-read_more-wrapper margin-g">
                    <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                </div>
            </div>
        </div>

        <!-- CARD PRINTER -->
        <?php

            $rows = $events->print_events();

            foreach ( $rows as $row ) {
                echo '<div class="news-card">
                    <h2 class="news-article-title">' . $row->title . '</h2>
                    <p class="news-article-text">
                        ' . $row->preview . '...
                    </p>
                    <div class="news-read_more-wrapper margin-g">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                    </div>
                </div>';
            }

        ?>

    </section>
</main>

<?php require_once 'footer.php'; ?>