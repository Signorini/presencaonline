<?php
get_header();
$context = Timber::get_context();

$context['post'] = Timber::query_post();
$context['sidebar'] = Timber::get_widgets('general-sidebar');

$context['cases']=Timber::get_posts(
    array(
        'post_type' => 'case',
        'posts_per_page' => 9,
        'post__not_in' => array($context['post']->ID)
    ));


Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);