<?php 
    // Header
    require_once 'header.php';
    // Events class
    require_once 'includes/events.inc.php';

    // New object
    $events = new Events;

    // Cardprinter function
    if ( isset( $_GET["id"] ) ) {
        $edit = $events->read_event( $_GET["id"] );
    }

    // If the user is not admin(id 1) then they are thrown back to news.php
    if ( empty( $_SESSION["id"] ) || $_SESSION["id"] ==! 1 ) {
        header("Location: events.php");
    }
?>

<!-- MAIN -->
<main class="main">
    <section class="news-editor">
        <div class="news-header">
            <h1 class="events-title">INDSÆT EVENT</h1>
        </div>

        <div class="news-form-wrapper">
            <form class="news-form" action="news.admin.php" method="post">
                <label class="label" for="title">Titel:</label>
                <input name="title" type="text" value="<?php if ( isset( $_GET["id"] ) ) { echo $edit->title; } ?>" >

                <label class="label" for="content">Indhold:</label>
                <textarea name="content" cols="100" rows="20"><?php if ( isset( $_GET["id"] ) ) { echo $edit->content; } ?></textarea>

                <label class="label" for="title">Billede:</label>
                <input name="image" type="file" >

                <input name="id" type="hidden" value="<?php if ( isset( $_GET["id"] ) ) { echo $_GET["id"]; } ?>" >

                <button class="submit" type="submit" name="submit">Insend</button>
            </form>

            <!-- PHP FOR NEWS OPERATIONS -->
            <?php
                if ( isset( $_POST["submit"] ) ) {

                    try {

                        if ( isset( $_POST["id"] ) ) {
                            $events->update_event( $_POST["id"], $_POST["title"], $_POST["content"], $_FILES["image"] );
                        }
                        else {
                            $events->insert_event( $_POST["title"], $_POST["content"], $_FILES["image"] );
                        }

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
            <h1 class="events-title">OVERSIGT OVER EVENTS</h1>
        </div>

        <!-- CARD PRINTER -->
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
                        <a class="news-latest-article-read_more" href="?id=' . $row->id . '">REDIGER</a>
                    </div>
                </div>';
            }
        ?>
    </section>
</main>

<?php require_once 'footer.php'; ?>