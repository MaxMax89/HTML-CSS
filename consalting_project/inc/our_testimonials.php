<section class="our_testimonials_block">
    <div class="container">
        <div class="our_testimonials_body">
            <h2 class="our_testimonials_title">Our Testimonials</h2>
            <div class="our_testimonials_slider swiper-container">
                <div class="swiper-wrapper">
					<? foreach ($ourTestimonialsFeedback as $item): ?>
                        <div class="swiper-slide our_testimonials_slide">
                            <div class="our_testimonials_slide_body">
                                <div class="our_testimonials_slide_feedback">
                                <div class="our_testimonials_slide_img img_top">
                                    <img src="img/logo/our_testi_top.png" alt="img">
                                </div>
                                <div class="our_testimonials_feedback_text">
                                    <p> <?= $item['text'] ?> </p>
                                </div>
                                <div class="our_testimonials_slide_img img_bottom" >
                                    <img src="img/logo/our_testi_bottom.png" alt="img">
                                </div>
                                </div>
                                <div class="our_testimonials_client">
                                    <div class="our_testimonials_client_avatar">
                                        <img src="<?= $item['avatar'] ?>" alt="">
                                    </div>
                                    <div class="our_testimonials_client_text">
                                        <div class="our_testimonials_client_name"><?= $item['name'] ?></div>
                                        <div class="our_testimonials_client_designation"><?= $item['designation'] ?></div>
                                        <div class="our_testimonials_client_rating">
                                            <img src="img/icon_rating.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<? endforeach; ?>
                </div>
                <div class="swiper-button-prev"><?=$swiperNavigation['prev']?></div>
                <div class="swiper-button-next"><?=$swiperNavigation['next']?></div>
            </div>
        </div>
    </div>
</section>
