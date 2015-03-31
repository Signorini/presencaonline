<?php
global $paged;
get_header();
$context = Timber::get_context();

$default_args=array(
    'post_type' => 'post',
    'paged' => $paged
);

query_posts($default_args);

if(!is_paged()) {
    $context['primarie']=Timber::get_posts(array_merge($default_args, [
        'posts_per_page' => 4
    ]));

    $context['news']=Timber::get_posts(array_merge($default_args, [
        'posts_per_page' => 9,
        'offset' => 3
    ]));

    $context['related_news']=Timber::get_posts(
        array(
            'post_type' => 'post',
            'posts_per_page' => 9
        ));
} else {
    $context['news']=Timber::get_posts($args);
}

$context['title'] = "Artigos";
$context['subtitle'] = "Novidades > Artigos";
$context['pagination'] =
$context['pagination'] = Timber::get_pagination();
$context['categories'] = Timber::get_terms('category', array('number' => 6, 'orderby' => 'count', 'order' => 'DESC'));
$context['tags'] = Timber::get_terms('tags', array('number' => 6, 'orderby' => 'count', 'order' => 'DESC'));



Timber::render(array('archive-'.get_query_var('cat').'.twig', 'archive-'.get_post_type().'.twig', 'archive.twig'), $context);