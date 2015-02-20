<?php
get_header();
$context = Timber::get_context();
$context['post'] = Timber::query_post();

$context['subtitle']=get_post_meta($context['post']->ID, 'subtitle', true);
$context['intro']=get_post_meta($context['post']->ID, 'intro', true);
$context['call_1']=get_post_meta($context['post']->ID, 'call_1', true);
$context['call_2']=get_post_meta($context['post']->ID, 'call_2', true);

$context['author_linked']=get_cimyFieldValue($context['post']->author->id, 'LINKEDIN');
$context['author_image']=get_wp_user_avatar_src($context['post']->author->id);

$cats=prepare_get_the_category($context['post']);

$context['related_news']=Timber::get_posts([
    'post_per_page' => 9,
    'cat' =>$cats
]);

Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);