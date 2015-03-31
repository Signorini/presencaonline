<?php
get_header();
$context = Timber::get_context();
$context['post'] = Timber::query_post();

$context['clients'] = Timber::get_posts(
    array(
        'post_type' => 'clientes',
        'post_per_page' => 99
    ));

$context['cases']=Timber::get_posts(
    array(
        'post_type' => 'case',
        'posts_per_page' => 9
    ));


$user_ids=get_post_meta($context['post']->ID, 'palestrantes', true);
if ($user_ids) :
$context['users']=get_users(
    array( 'include' => $user_ids
    ));
endif;

Timber::render(array('page-' . $context['post']->ID . '.twig', 'page-' . $context['post']->slug . '.twig', 'page.twig'), $context);