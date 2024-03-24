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
            <?foreach ($headerSocial as  $social):?>
                <a href="<?=$social['link']?>"><img src="img/icons/<?=$social['logo']?>" alt="img"></a>
            <?endforeach;?>
        </div>
        <div class="header_communication_icons">
            <div class="header_communication_icons_mail">
                <div class="header_logo_img">
                    <a href="<?=$headerMail?>"><img src="img/mail_logo.png" alt="img"></a>
                </div>
                <a href="<?=$headerMail?>"><p ><?= $headerMail; ?></p></a>
            </div>
            <div class="header_communication_icons_phone">
                <div class="header_logo_img">
                    <img src="img/phone_logo.png" alt="img">
                </div>
                <p><?= $headerPhone; ?></p>
            </div>
        </div>
    </div>
</header>
