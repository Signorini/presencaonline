<?php
class INIT_Timber extends TimberSite {

    function __construct(){

        add_filter('timber_context', array($this, 'add_to_context'));
        add_filter('get_twig', array($this, 'add_to_twig'));
        parent::__construct();
    }

    function add_to_context($context){
        $context['menu_top'] = new TimberMenu('top');
        $context['menu_footer'] = new TimberMenu('footer');
        return $context;
    }


    public static function get_term($args = null, $maybe_args = array(), $TermClass = 'TimberTerm'){
        return TimberTermGetter::get_term($args, $maybe_args, $TermClass);
    }



    function add_to_twig($twig){
        /* this is where you can add your own fuctions to twig */
        $twig->addExtension(new Twig_Extension_StringLoader());
        $twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
        return $twig;
    }

}

new INIT_Timber();

//exemplo de funções wtigs
function myfoo($text){
    $text .= ' bar!';
    return $text;
}