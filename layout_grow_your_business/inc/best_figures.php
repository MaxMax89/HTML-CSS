<? include 'inc/data_site.php' ?>
<div class="best_figures_block">
    <div class="best_figures_row">
        <div class="best_figures_column">
            <div class="best_figures_img">
                <img src="img/best_figures.png" alt="img">
            </div>
        </div>
        <div class="best_figures_column column_content">
            <div class="best_figures_content">
                <h2 class="best_figures_title title">Our Best Figures<br>We Believe In The Best</h2>
                <p class="bast_figures_text text">Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <a class="best_figures_btn btn" href="#">learn more</a>
            </div>
        </div>
    </div>
    <div class="best_figures_row_widget">
        <div class="best_figures_container container">
			<? foreach ($bestFiguresCount as $value): ?>
                <div class="best_figures_widget">
                    <div class="best_figures_widget_count"><?= $value['count'] ?></div>
                    <div class="best_figures_widget_name"><?= $value['name'] ?></div>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</div>
