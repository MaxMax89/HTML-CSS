<? include 'data/data.page.php' ?>

<section class="our_services_block">
    <div class="container">
        <div class="our_services_body">
            <h2 class="our_services_title">Our Services</h2>
            <div class="our_services_slider swiper-container">
                <div class="swiper_wrapper swiper-wrapper">
						<? foreach ($services as $service): ?>
                            <div class="our_services_slider_body swiper-slide">
                                <div class="our_services_slider_img">
                                    <img src="img/<?= $service['image'] ?>" alt="">
                                </div>
                                <h3 class="our_services_slider_title"><?= $service['title'] ?></h3>
                            <p class="our_services_slider_text"><?= $service['text'] ?></p>
                            </div>
						<? endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
