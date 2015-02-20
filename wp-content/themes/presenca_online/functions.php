<?php
/*
 * Helpers - funções genericas para formatação pontual (helper nao tem hooks)
 * Inc - Includes de chamadas, como registros, mudança no administrador
 *
 */
add_editor_style();


add_theme_support('post-thumbnails');

add_theme_support('menus');

require_once('inc/libs/mobile_detector.php');
require_once('inc/libs/class_timber.php');
require_once('inc/libs/bfi_thumb.php');

require_once('inc/func_registers.php');
require_once('inc/func_admin.php');
require_once('inc/func_mobile_switch.php');
require_once('inc/theme-widgets.php');


require_once('helpers/helper-youtube.php');
require_once('helpers/format.php');
require_once('helpers/shorten_url.php');