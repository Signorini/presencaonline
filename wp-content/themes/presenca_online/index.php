<?php
get_header();
$context = Timber::get_context();

$context['sliders']=Timber::get_posts(
    array(
        'post_type' => 'rotativos',
        'posts_per_page' => 9
    ));

$context['services']=Timber::get_posts(
    array(
        'post_type' => 'servico',
        'posts_per_page' => 9
    ));

$context['news']=Timber::get_posts(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3
    ));


Timber::render('index.twig', $context);