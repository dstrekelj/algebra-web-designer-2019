<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap" rel="stylesheet">
    <link href="<?php echo bloginfo( 'stylesheet_directory' ) . '/reset.css'; ?>" />
    <link href="<?php echo bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    <title>Travelogue</title>
    <?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header class="header">
            <a class="logo-link" href="/">
				<img class="logo" src="<?php echo bloginfo( 'stylesheet_directory' ) . '/assets/Logo.svg'; ?>">
			</a>

            <?php
            if (has_nav_menu('header')) {
                wp_nav_menu('header');
            }
            ?>
		</header>