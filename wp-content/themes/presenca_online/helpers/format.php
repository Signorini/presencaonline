<?php
function format_data($data) {
    $date = DateTime::createFromFormat('Ymd', $data);

    $n=$date->format('d/m');

    return $n;
}

function get_title_anywhere() {
    $str="";
    if (is_day()){
        $str = 'Data > '.get_the_date( 'D M Y' );
    } else if (is_month()){
        $str = 'Data > '.get_the_date( 'M Y' );
    } else if (is_year()){
        $str = 'Data > '.get_the_date( 'Y' );
    } else if (is_tag()){
        $str = "Tag > ".single_tag_title('', false);
    } else if (is_category()){
        $str = "Categoria > ".single_cat_title('', false);
    } else if (is_post_type_archive()){
        $str = post_type_archive_title('', false);
    } elseif( is_single() ) {
        $str=get_the_title();
    }

    if(is_tax()) {
        global $wp_query;
        $term = $wp_query->get_queried_object();
        if(!empty($term)) {
            $title = $term->name;
            $str= "Termo > ".$title;
        }
    }

    if(is_author()) {
        $str=get_the_author();
    }

    if ( is_post_type_archive() ) {
        $str=post_type_archive_title('', false);
    }

    if(is_search()) {
        $str = "Pesquisa > ". get_search_query();
    }

    return $str;
}

function get_title_title() {
    $str="";
    if (is_day()) {
        $str = "Artigos";
    }

    if (is_month()) {
        $str = "Artigos";
    }

    if (is_year()) {
        $str = "Artigos";
    }

    if (is_tag()) {
        $str = "Artigos";
    }

    if (is_category()) {
        $str = "Artigos";
    }

    if(is_tax()) {
        $str = "Artigos";
    }

    if(is_author()) {
        $str="Author";
    }

    if ( is_post_type_archive() ) {
        $str=post_type_archive_title('', false);

        if(strtolower($str)=='landing') {
            $str="Área de atuação";
        }
    }

    if(is_search()) {
        $str = "Resultado de busca";
    }

    return $str;
}

function prepare_get_the_category($post) {
    $cats=get_the_category($post);

    $arr=[];
    if(!empty($cats)) {
        foreach($cats as $cat) {
            $arr[]=$cat->term_id;
        }
    }

    if(empty($arr)) {
       return null;
    }

    $arr=implode(',', $arr);
    return $arr;
}