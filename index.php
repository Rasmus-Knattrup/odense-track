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
            <div class="news-latest-article-box">
                <article class="news-latest-article">
                    <span>Test</span>
                    <a href="#">LÆS MERE</a>
                </article>
            </div>
        </div>

        <div class="news-center">
            <h2 class="news-title">EVENT CENTER</h2>
            <div class="news-center-articles">

            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>