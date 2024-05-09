<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doc</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css?v=134_<?= time() ?>">
</head>
<body>
<? include 'data_site.php'; ?>

<header class="header">
    <div class="header_container container">
        <div class="header_media_icons">
			<? foreach ($headerSocial as $social): ?>
                <a href="<?= $social['link'] ?>"><?=$social['logo']?></a>
			<? endforeach; ?>
        </div>
        <div class="header_communication_icons">
            <div class="header_communication_icons_mail">
                <div class="header_logo_mail_img">
                    <a  href="<?=$headerMail['link']?>"><?=$headerMail['logo']?><p><?=$headerMail['name']?></p></a>
                </div>
            </div>
            <div class="header_communication_icons_phone">
                <div class="header_logo_phone_img">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a>
                </div>
                <p><?= $headerPhone; ?></p>
            </div>
        </div>
    </div>

