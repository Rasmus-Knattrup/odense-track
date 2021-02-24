<?php 
    if ( empty( $_GET["id"] ) ) {
        header("Location: events.php");
    }
    // Header
    require_once 'header.php';
    // Events class
    require_once 'includes/events.inc.php';

    // New object
    $events = new Events;
    $event = $events->read_event( $_GET["id"] );
?>

<!-- MAIN -->
<main class="main">
    <!-- SELECTED EVENT -->
    <section class="news-readmore-wrapper">
        <article>
            <div class="events-readmore-img">
                <img src="img/<?php echo $event->image; ?>" alt="">
            </div>
            <header>
                <h2 class="news-readmore-title"><?php echo $event->title; ?></h2>
            </header>

            <div class="news-readmore-content">
                <p class="news-readmore-text"><?php echo $event->content; ?></p>
            </div>

            <p class="signup-link-text">Læs flere events <a class="signup-link" href="events.php">her</a>!</p>
        </article>
    </section>
</main>

<?php require_once 'footer.php'; ?>