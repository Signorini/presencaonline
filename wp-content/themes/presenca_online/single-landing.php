<?php
get_header();
$context = Timber::get_context();

$context['post'] = Timber::query_post();

$clients=get_post_meta($context['post']->ID, 'client', true);
if ($clients) :
    $context['clients'] = Timber::get_posts(
        array(
        'post_type' => 'clientes',
        'post__in' => $clients
        ));
endif;


$context['services']=Timber::get_posts(
    array(
        'post_type' => 'servico',
        'posts_per_page' => 9
    ));

$context['landings']=Timber::get_posts(
    array(
        'post_type' => 'landing',
        'posts_per_page' => 9
    ));

Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);