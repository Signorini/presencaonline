<?php
class Mapa extends WP_Widget {
  function __construct() {
   parent::WP_Widget(false, $name = 'VB SP - Mapas', array( 'description' => 'Mapa interna'));
  }

  function widget($args, $instance) {
    extract( $args );
    global $post;

    $mapa=trim(get_post_meta($post->ID, 'mapa', true));

      if(!empty($mapa)) {
          //echo "<iframe src='".$mapa."' frameborder='0'  class='iframemap'></iframe>";

          echo "<div class='map-box'>".$mapa."</div>";
      }
	?>

    	<?php
  }

}
register_widget('Mapa');


class Informacoes extends WP_Widget {
   function __construct() {
   parent::WP_Widget(false, $name = 'VB SP - Informações', array( 'description' => 'Informações interna'));
  }

  function widget($args, $instance) {
	global $post;

    $info=get_post_meta($post->ID, 'info_complementar', true);

    if(!empty($info)) :

        echo $args['before_widget'];
        ?>

          <div class="pl20 bg-super-gray">
              <div class="pt20 pb20">
               <?php echo $info; ?>
              </div>
          </div>

        <?php

        echo $args['after_widget'];

    endif;
  }

}
register_widget('Informacoes');



class Newsletter extends WP_Widget {
    function __construct() {
        parent::WP_Widget(false, $name = 'VB SP - Newsletter', array( 'description' => 'Caixa de newsletter'));
    }

    function widget($args, $instance) {
        global $post;

        ?>

        <div class="pl15 mt20 bg-super-gray">
            <?php Timber::render('modules/box-mini-relations.twig'); ?>
        </div>

        <?php
    }

}
register_widget('Newsletter');