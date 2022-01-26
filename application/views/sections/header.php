<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title> <?= $page_title ?> | Fluoza Motors</title>
    <meta content="Templines" name="author">
    <meta content="KeyMoto" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class=" <?= $body ?>">


    <div class="page-wrapper">
        <header class="page-header page-header-transparent">
            <div class="page-header__inner">
                <div class="page-header__left">
                    <div class="logo"><a class="logo__link" href="<?= base_url() ?>inicio">
                            <div class="logo__icon"><img src="assets/img/logo_valle.png" alt="KeyMoto"></div>
                        </a></div>
                </div>
                <div class="page-header__center">
                    <nav class="page-nav" data-uk-navbar="">
                        <ul class="uk-navbar-nav">
                            <li><a href="<?= base_url() ?>inicio">Inicio</a>
                            </li>
                            <li><a href="<?= base_url() ?>nosotros">Nosotros</a></li>
                            <li><a href="<?= base_url() ?>motos">Tienda</a></li>
                            <li><a href="<?= base_url() ?>contactanos">Contactanos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="page-header__right">
                    <a class="uk-navbar-toggle search-btn" href="#modal-search" data-uk-search-icon="" data-uk-toggle=""></a>
                    <a class="uk-navbar-toggle menu-btn" href="#offcanvas" data-uk-toggle="">
                        <img src="assets/img/icons/menu.svg" alt="menu">
                    </a>
                </div>
            </div>
        </header>