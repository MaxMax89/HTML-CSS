<? include 'data_site.php'; ?>

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

	<? $statisticCompanyChunk = array_chunk($statisticCompany, 2) ?>
    <div class="our_company_widget">
		<? foreach ($statisticCompanyChunk as $row): ?>
            <div class="our_company_widget_row">
				<? foreach ($row as $item): ?>
                    <div class="our_company_widget_img">
                        <div class="our_company_widget_item">
                            <p class="our_company_widget_count"><?= $item['count'] ?></p>
                            <p class="our_company_widget_name"><?= $item['name'] ?></p>
                        </div>
                    </div>
				<? endforeach; ?>
            </div>
		<? endforeach; ?>
    </div>
</div>
