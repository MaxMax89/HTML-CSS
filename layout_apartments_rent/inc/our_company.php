<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appartments</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="css/style.css?v=134_<?= time() ?>">
</head>
<body>
<div class="our_company">
    <div class="our_company_text">
        <h1 class="our_company_title">Our’s Company <br>Statistics </h1>
        <p>
            In this space market-facing, yet UI work flows ,
            or bake it in. Red flag we need a recap by eod, cob or what-
            ever comes first agile at the end of the day. Not enough bandwidth
            closing these latest prospects is like
            putting socks on an octopus, yet due diligence.
        </p>
        <p>We need to get all stakeholders up to speed and in the
            right place hard stop, or techno-logically savvy or pre launch. Pro-sumer software commitment to the
            cause offline this discussion and wiggle room blue sky. Beef up teams were able to drive adoption
            and awareness. Screw the pooch killing it.
        </p>
    </div>

	<?
	$arr =
		[
			[
				'name' => 'Appartments',
				'count' => '748',
				'img' => 'img/our_company/appartment.jpg'
			],
			[
				'name' => 'Clients',
				'count' => '3854',
				'img' => 'img/our_company/clients.jpg'
			],
			[
				'name' => 'Employyes',
				'count' => '24',
				'img' => 'img/our_company/employyes.jpg'
			],
			[
				'name' => 'Awards',
				'count' => '14',
				'img' => 'img/our_company/awards.jpg'
			]
		];
	?>
    <div class="our_company_widget">
		<? foreach (array_chunk($arr, 2) as $value): ?>
            <div class="our_company_widget_row">
				<? foreach ($value

							as $v): ?>
                    <div class="our_company_widget_img">
                        <div class="our_company_widget_item">
                            <p class="our_company_widget_count"><?= $v['count'] ?></p>
                            <p class="our_company_widget_name"><?= $v['name'] ?></p>
                        </div>
                    </div>
				<? endforeach; ?>
            </div>
		<? endforeach; ?>
    </div>
</div>
