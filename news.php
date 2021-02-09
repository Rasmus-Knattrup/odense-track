<?php 
    // Header
    require_once 'header.php';
    // Login class
    require_once 'includes/news.inc.php';
?>

<!-- MAIN -->
<main class="main">
    <!-- OVERVIEW OF LATEST NEWS -->
    <section class="news-overview">
        
        <?php
            $news = new News;
            $rows = $news->print_news();

            foreach ( $rows as $row ) {
                echo '<div class="news-card">
                    <span class="news-overview-date">' . $row->date . '</span>
                    <h2 class="news-article-title">' . $row->title . '</h2>
                    <p class="news-article-text">
                        ' . $row->content . '
                    </p>
                    <div class="news-read_more-wrapper margin-g">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                    </div>
                </div>';
            }
        ?>

        <!-- PLACEHOLDERS -->

        <div class="news-card">
            <span class="news-overview-date">11 MAR</span>
            <h2 class="news-article-title">Need For Speed</h2>
            <p class="news-article-text">
                Kom ud på banen og slip den indre fartdjævel løs. 
                Denne dag er for dig som trænger til at give den gas, 
                og teste din bil på en bane i sikre...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">12 MAR</span>
            <h2 class="news-article-title">Motion For Alle</h2>
            <p class="news-article-text">
                Hver tirsdag tilbyder Odense Track en unik og
                sikker træningsaften, for cyklister og motionister. 
                Vi kalder denne aften for “Banen Rundt”...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>


        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
        <div class="news-card">
            <span class="news-overview-date">13 MAR</span>
            <h2 class="news-article-title">DM i Gokart</h2>
            <p class="news-article-text">
                Danmarksmesterskaber i Gokart, afholdes i år,
                på Odense Track. Deltagerne kommer fra hele
                landet, niveauet er helt i top, når kørerne...
            </p>
            <div class="news-read_more-wrapper margin-g">
                <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
            </div>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>