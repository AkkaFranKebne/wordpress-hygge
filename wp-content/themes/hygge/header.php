<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wordpress Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext" rel="stylesheet">
</head>
<body>
	<header id="header" class="background-bar">
		<div class="top-bar">
			<div class="wrapper">
				<div class="inline">
                    <?php wp_nav_menu(array('menu'=>'Social Menu')); ?>
				</div>
				<nav class="inline alignright">
					<ul class="menu">
                        <?php wp_nav_menu(array('menu'=>'Main Menu')); ?>
					</ul>
				</nav>
			</div>
		</div>
		<div class="wrapper">
			<div class="logo-box aligncenter">
				<p class="aside-text">since<span class="logo"><i class="fa fa-coffee" aria-hidden="true"></i></span>2001</p>
				<h1><?php echo get_bloginfo('name'); ?></h1>
				<p class="sentence"><?php echo get_bloginfo('description'); ?></p>
			</div>
		</div>
	</header>
    	<section>
		<div class="photo-wrapper">
			<div class="photo-box">
                    <?php
                    $post_id = 53;
                    $queried_post = get_post($post_id);
                    //$title = $queried_post->post_title;
                    //echo $title;
                    echo $queried_post->post_content;
                    ?>
			</div>
			<div class="photo-box">
                    <?php
                    $post_id = 54;
                    $queried_post = get_post($post_id);
                    //$title = $queried_post->post_title;
                    //echo $title;
                    echo $queried_post->post_content;
                    ?>
			</div>
		</div>
            
	</section>