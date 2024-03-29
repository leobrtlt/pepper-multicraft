<?php include('themes/pepper/theme_config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta content="initial-scale=1.0, width=device-width, user-scalable=yes" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link rev="made" href="mailto:info@multicraft.org">
    <meta name="description" content="Multicraft: The Minecraft server control panel">
    <meta name="keywords" content="Multicraft, Minecraft, server, management, control panel, hosting">
    <meta name="author" content="xhost.ch GmbH">
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="<?php echo  Yii::app()->request->baseUrl; ?>/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?php echo Theme::css('base.css') ?>" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Theme::css('pepper.css') ?>" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Theme::css('color/'.$themecolor.'.css') ?>" media="screen, projection" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="page">
