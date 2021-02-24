<?php require_once 'header.php'; ?>

<!-- MAIN -->
<main class="main">
    <!-- HERO -->
    <img class="hero" src="img/hero.png" alt="">
    <!-- EVENTS -->
    <section class="events">
        <!-- EVENTS-HEADER -->
        <div class="events-header">
            <h1 class="events-title">EVENTS</h1>
            <div class="events-nav">
                <span class="events-counter">1 af 2</span>
                <button class="events-arrow events-arrow-left"> <i class="arrow left"></i> </button>
                <button class="events-arrow events-arrow-right"> <i class="arrow right"></i> </button>
            </div>
        </div>
        
        <!-- EVENTS-MAIN -->
        <div class="events-main">
            <div class="events-thumbnail">
                <a class="events-link" href="events.readmore.php?id=1">
                    <img src="img/kalender.png" alt="">
                    <span class="label">EVENTS KALENDER</span>
                </a>
            </div>
            <div class="events-thumbnail">
                <a class="events-link" href="events.readmore.php?id=2">
                    <img src="img/motion-for-alle.png" alt="">
                    <span class="label">Motion For Alle</span>
                </a>
            </div>
            <div class="events-thumbnail">
                <a class="events-link" href="events.readmore.php?id=3">
                    <img src="img/need-for-speed.png" alt="">
                    <span class="label">Need For Speed</span>
                </a>
            </div>
            <div class="events-thumbnail">
                <a class="events-link" href="events.readmore.php?id=4">
                    <img src="img/odense-baneloeb.png" alt="">
                    <span class="label">Odense Baneløb</span>
                </a>
            </div>
            <div class="events-thumbnail">
                <a class="events-link" href="events.readmore.php?id=5">
                    <img src="img/marathon.png" alt="">
                    <span class="label">Odense Marathon Løb</span>
                </a>
            </div>
        </div>

        <!-- EVENTS-FOOTER -->
        <div class="events-footer">
            <h2 class="events-footer-prior">>>TIDLIGERE EVENTS</h2>
        </div>
    </section>

    <!-- NEWS -->
    <section class="news">
        <!-- LATEST NEWS -->
        <div class="news-latest">
            <!-- LATEST NEWS-HEADER -->
            <div class="news-latest-header">
                <h2 class="news-title">BANE AKTIVITET</h2>
                <span class="news-view-all"> <i class="arrow right view-all"></i> Se hele Event Kalenderen</span>
                <div class="news-arrow-box">
                    <button class="events-arrow news-arrow-down"> <i class="arrow down"></i> </button>
                    <button class="events-arrow news-arrow-up"> <i class="arrow up"></i> </button>
                </div>
            </div>

            <!-- LATEST NEWS-MAIN-->
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
                        <a class="news-latest-article-read_more" href="news.readmore.php?id=1">LÆS MERE</a>
                    </div>
                </article>
            </div>

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
                        <a class="news-latest-article-read_more" href="news.readmore.php?id=2">LÆS MERE</a>
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
                        <a class="news-latest-article-read_more" href="news.readmore.php?id=3">LÆS MERE</a>
                    </div>
                </article>
            </div>
            
        </div>

        <!-- (NEWS) EVENTS CENTER -->
        <div class="news-center">
            <!-- EVENTS CENTER-HEADER -->
            <h2 class="news-title">EVENT CENTER</h2>

            <!-- EVENTS CENTER-MAIN-->
            <div class="news-center-article">
                <div class="news-center-article-wrapper">
                    <article class="news-article">
                        <div class="news-center-img-frame">
                            <img src="img/book-evenet-center.png" alt="book-evenet-center.png">
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
                            <i class="news-center-arrow"></i>
                        </div>
                    </article>

                    <article class="news-article">
                        <div class="news-center-img-frame">
                            <img src="img/team-building.png" alt="team-building.png">
                        </div>
                        <div class="news-article-content">
                            <h3 class="news-article-title">Team Building</h3>
                            <p class="news-article-text">
                                Trænger jeres virksomhed til Team Building, så 
                                book en tid hos os, hvor Fart og Samarbejde er i 
                                focus, og alle er garanteret en sjov dag.
                            </p>
                        </div>
                        <div class="news-center-arrow-wrapper">
                            <i class="news-center-arrow"></i>
                        </div>
                    </article>

                    <article class="news-article">
                        <div class="news-center-img-frame">
                            <img src="img/lej-banen.png" alt="lej-banen.png">
                        </div>
                        <div class="news-article-content">
                            <h3 class="news-article-title">Lej Banen</h3>
                            <p class="news-article-text">
                                Vil du have banen for dig selv eller sammen 
                                med nogle venner, så kan du leje hele banen og 
                                sætte løb op som du altid har drømt om.
                            </p>
                        </div>
                        <div class="news-center-arrow-wrapper">
                            <i class="news-center-arrow"></i>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>