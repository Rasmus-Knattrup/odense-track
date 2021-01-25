<?php include_once 'header.php'; ?>

<main class="main">
    <img class="hero" src="img/hero.png" alt="">
    <section class="events">
        <div class="events-header">
           <h1 class="events-title">EVENTS</h1>
           <div class="events-nav">
                <span class="events-counter">
                    <span class="padding-1 padding-left-8">1 af 2</span>
                </span>
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
            <a class="events-footer-link" href="#">>>TIDLIGERE EVENTS</a>
        </div>
    </section>

    <section class="news">
        <div class="news-header">
            <h2>BANE AKTIVITET</h2>
            <button class="events-arrow events-arrow-right"> <i class="arrow up"></i> </button>
            <button class="events-arrow events-arrow-left"> <i class="arrow down"></i> </button>
            <h2>EVENT CENTER</h2>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>