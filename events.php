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
    <!-- OVERVIEW OF EVENTS -->
    <section class="news-overview">

        <div class="news-header">
            <h1 class="events-title">EVENTS</h1>
        </div>

        <!-- CARD PRINTER -->
        <div class="events-card-wrapper">
            <?php

                $rows = $events->print_events();

                foreach ( $rows as $row ) {
                    echo '<div class="events-card">
                        <div class="events-card-child">
                            <div class="events-img">
                                <img src="img/' . $row->image . '" alt="">
                            </div>
                            <div class="events-card-content">
                                <h2 class="news-article-title">' . $row->title . '</h2>
                                <p class="news-article-text">
                                    ' . $row->preview . '...
                                </p>
                            </div>
                        </div>
                        <div class="news-read_more-wrapper margin-g">
                            <a class="news-latest-article-read_more" href="events.readmore.php?id=' . $row->id . '">LÆS MERE</a>
                        </div>
                    </div>';
                }

            ?>
        </div>

        <div class="news-header">
            <h2 class="events-title">TIDLIGERE EVENTS</h2>
        </div>

    </section>
</main>

<?php require_once 'footer.php'; ?>