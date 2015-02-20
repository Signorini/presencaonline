<?php
get_header();
$context = Timber::get_context();
$context['post'] = Timber::query_post();

Timber::render(array('page-' . $context['post']->ID . '.twig', 'page-' . $context['post']->slug . '.twig', 'page.twig'), $context);