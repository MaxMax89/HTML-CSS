<? include 'inc/data_site.php' ?>
<div class="meet_team_block">
    <div class="meet_team_container container">
        <h2 class="meet_team_title title">Meet the team</h2>
        <div class="meet_team_content">
			<? foreach ($workers as $worker): ?>
                <div class="meet_team_workers_card">
                    <img src="<?= $worker['avatar'] ?>" alt="img">
                    <h4 class="meet_team_workers_name title"><?= $worker['name'] ?></h4>
                    <p class="meet_team_workers_position text"><?= $worker['position'] ?></p>
                    <p class="meet_team_workers_about text"><?= $worker['about'] ?></p>
                    <div class="meet_team_workers_links">
						<? foreach ($worker['social'] as $icon => $link): ?>
                            <a href="<?= $link ?>"><img src="img/icons/<?= $icon ?>" alt=""></a>
						<? endforeach; ?>
                    </div>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</div>
