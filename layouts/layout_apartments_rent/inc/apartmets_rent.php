<div class="apartments_block">
    <div class="apartments_block_title"><h1>More Then 500+<br>Appartments For Rent</h1></div>
    <div class="apartments_block_content">

		<?
		$array =
			[
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_01.jpg'
				],
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_02.jpg'
				],
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_03.jpg'
				],
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_04.jpg'
				],
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_05.jpg'
				],
				[
					'name' => 'Random Street, Apt B453, New York',
					'price' => '$3,500',
					'img' => '../img/apartments/apartment_06.jpg'
				]
			];
		?>
        <div class="apartments_block_product">
			<? foreach ($array as $value): ?>
                <div class="apartments_block_product_card">
                    <div class="apartments_block_product_img">
                        <img src="<?= $value['img'] ?>" alt="pic">
                    </div>
                    <p class="apartments_block_product_name"><?= $value['name'] ?></p>
                    <div class="apartments_block_product_price">
                        <p><?= $value['price'] ?></p>
                        <div class="apartments_block_product_price_icon">
                            <img src="../img/apartments/logo_shower.png" alt="">
                            <p>2BA</p>
                            <p>2DB</p>
                            <img src="../img/apartments/logo_bed.png" alt="">
                        </div>
                    </div>
                </div>
			<? endforeach; ?>
        </div>
    </div>
    <div class="apartments_block_form">
        <div class="apartments_block_form_search">
            <img src="../img/apartments/logo_magnifier.png" alt="">
            <form action="#">
                <input type="text" placeholder="Search location">
                <button>Search</button>
            </form>
        </div>
        <button class="all_apartments">View All Appartments</button>
    </div>

</div>

</html>


