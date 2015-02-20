<?php
get_header();
$context = Timber::get_context();

$context['post'] = Timber::query_post();

$context['subtitle']=get_post_meta($context['post']->ID, 'subtitle', true);
$context['intro']=get_post_meta($context['post']->ID, 'intro', true);

$context['box_title']=get_post_meta($context['post']->ID, 'box_title', true);
$context['box_text']=get_post_meta($context['post']->ID, 'box_text', true);

if (isset($context['post']->box_imagem) && strlen($context['post']->box_imagem)){
    $context['post']->box_imagem = new TimberImage($context['post']->box_imagem);
}



$context['services']=Timber::get_posts(
    array(
        'post_type' => 'servico',
        'posts_per_page' => 9
    ));



Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);