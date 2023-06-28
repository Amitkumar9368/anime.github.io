<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php if (!empty($webdata) && !empty($animeData) && !empty($currentData)) : ?>
        <title><?php echo $webdata['webname']; ?>-<?= $animeData['ani_name'] ?>-Episode <?= $currentData->ep_id_name ?>-<?= $currentData->ep_name ?></title>
    <?php elseif (!empty($animetv['ani_name'])) : ?>
        <title><?php echo $webdata['webname']; ?>-<?= $animetv['ani_name'] ?></title>
    <?php else : ?>
        <title><?php echo $webdata['webname']; ?>-<?php echo $webdata['webinfo']; ?></title>
    <?php endif; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="charset" content="UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="<?php echo $webdata['webname']; ?> - Official <?php echo $webdata['webname']; ?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords" content="anime to watch, watch anime,anime online, free anime online, online anime, anime streaming, stream anime online, english anime, english dubbed anime" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/min.css">
    <link rel="manifest" href="./manifest.json">
    <link rel="icon" sizes="192x192" href="<?php echo $webdata['webicon']; ?>">
    <script type="text/javascript">
        setTimeout(function() {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href =
                'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
</head>