<?php
global $paged;
get_header();
$context = Timber::get_context();

$default_args=array_filter($wp_query->query_vars);

$context['services']=Timber::get_posts(array_merge($default_args, [
    'posts_per_page' => 999
]));



Timber::render(array('archive-'.get_query_var('cat').'.twig', 'archive-'.get_post_type().'.twig', 'archive.twig'), $context);