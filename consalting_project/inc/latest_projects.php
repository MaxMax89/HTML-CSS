<section class="latest_project_block">
    <div class="container">
        <h2 class="latest_project_title">Latest Project</h2>
        <div class="latest_project_slider swiper-container">
            <div class="swiper-wrapper latest_project_slider_wrapper">
				<? foreach ($latestProjects as $item): ?>
                    <div class="latest_project_slide swiper-slide">
                        <div class="latest_project_slide_body">
                            <div class="latest_project_slide_img">
                                <img src="<?= $item['img'] ?>" alt="">
                            </div>
                            <div class="latest_project_slide_info">
                                <div class="latest_project_slide_date"><?= $item['date'] ?></div>
                                <div class="latest_project_slide_text"><?= $item['text'] ?></div>
                            </div>
                        </div>
                    </div>
				<? endforeach; ?>
            </div>
            <div class="swiper-pagination latest_project_pagination"></div>
        </div>
    </div>
</section>