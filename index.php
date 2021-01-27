<?php include_once 'header.php'; ?>

<main class="main">
    <img class="hero" src="img/hero.png" alt="">
    <section class="events">
        <div class="events-header">
            <h1 class="events-title">EVENTS</h1>
            <div class="events-nav">
                <span class="events-counter">1 af 2</span>
                <button class="events-arrow events-arrow-left"> <i class="arrow left"></i> </button>
                <button class="events-arrow events-arrow-right"> <i class="arrow right"></i> </button>
            </div>
        </div>

        <div class="events-main">
            <div class="events-thumbnail">
                <img src="img/kalender.png" alt="">
                <span class="events-label">EVENTS KALENDER</span>
            </div>
            <div class="events-thumbnail">
                <img src="img/motion-for-alle.png" alt="">
                <span class="events-label">Motion For Alle</span>
            </div>
            <div class="events-thumbnail">
                <img src="img/need-for-speed.png" alt="">
                <span class="events-label">Need For Speed</span>
            </div>
            <div class="events-thumbnail">
                <img src="img/odense-baneloeb.png" alt="">
                <span class="events-label">Odense Baneløb</span>
            </div>
            <div class="events-thumbnail">
                <img src="img/marathon.png" alt="">
                <span class="events-label">Odense Marathon Løb</span>
            </div>
        </div>

        <div class="events-footer">
            <h2 class="events-footer-prior">>>TIDLIGERE EVENTS</h2>
        </div>
    </section>

    <section class="news">
        <div class="news-latest">
            <div class="news-latest-header">
                <h2 class="news-title">BANE AKTIVITET</h2>
                <span class="news-view-all"> <i class="arrow right view-all"></i> Se hele Event Kalenderen</span>
                <div class="news-arrow-box">
                    <button class="events-arrow news-arrow-down"> <i class="arrow down"></i> </button>
                    <button class="events-arrow news-arrow-up"> <i class="arrow up"></i> </button>
                </div>
            </div>
            <div class="news-article-wrapper">
                <div class="news-latest-date-wrapper">
                    <div class="news-latest-date">
                        <span class="news-latest-day">11</span>
                        <span class="news-latest-month">MAR</span>
                    </div>
                </div>
                <article class="news-article">
                    <div class="news-article-content">
                        <h3 class="news-article-title">Need For Speed</h3>
                        <p class="news-article-text">
                            Kom ud på banen og slip den indre fartdjævel
                            løs. Denne dag er for dig som trænger til at give
                            den gas, og teste din bil på en bane i sikre...
                        </p>
                    </div>
                    <div class="news-read_more-wrapper">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                    </div>
                </article>
            </div>

            <!-- VVV TO BE DELETED VVV -->
            <div class="news-article-wrapper">
                <div class="news-latest-date-wrapper">
                    <div class="news-latest-date">
                        <span class="news-latest-day">12</span>
                        <span class="news-latest-month">MAR</span>
                    </div>
                </div>
                <article class="news-article">
                    <div class="news-article-content">
                        <h3 class="news-article-title">Motion For Alle</h3>
                        <p class="news-article-text">
                            Hver tirsdag tilbyder Odense Track en unik og
                            sikker træningsaften, for cyklister og motionis-
                            ter. Vi kalder denne aften for “Banen Rundt”...
                        </p>
                    </div>
                    <div class="news-read_more-wrapper">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                    </div>
                </article>
            </div>
            <div class="news-article-wrapper">
                <div class="news-latest-date-wrapper">
                    <div class="news-latest-date">
                        <span class="news-latest-day">13</span>
                        <span class="news-latest-month">MAR</span>
                    </div>
                </div>
                <article class="news-article">
                    <div class="news-article-content">
                        <h3 class="news-article-title">DM i Gokart</h3>
                        <p class="news-article-text">
                            Danmarksmesterskaber i Gokart, afholdes i år,
                            på Odense Track. Deltagerne kommer fra hele
                            landet, niveauet er helt i top, når kørerne...
                        </p>
                    </div>
                    <div class="news-read_more-wrapper">
                        <a class="news-latest-article-read_more" href="#">LÆS MERE</a>
                    </div>
                </article>
            </div>
        </div>

        <div class="news-center">
            <h2 class="news-title">EVENT CENTER</h2>
            <div class="news-center-article">
                <div class="news-center-article-wrapper">
                    <article class="news-article">
                        <div>
                            <img src="img/book-evenet-center.png" alt="Placer holder">
                        </div>
                        <div class="news-article-content">
                            <h3 class="news-article-title">Book vores Event Center</h3>
                            <p class="news-article-text">
                                Skal du holde firmafest, fødselsdag, reception
                                eller andet, har vores Event Center et lokale 
                                som passer til dit behov. Fra 200 - 5000 gæster.
                            </p>
                        </div>
                        <div class="news-center-arrow-wrapper">
                            <i class="news-center-arrow right"></i>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>