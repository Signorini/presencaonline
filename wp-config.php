<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_presenca');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'master');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'alphadraconis');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}forZXlVyQhcP8YSrUkGQ1C^{Rz1_#EogFI/c>]@QwA-=bg`QNGy~t/7.8E(s~?+');
define('SECURE_AUTH_KEY',  '&^6inm~TZff=vEv[<z*&uN5ye||P]+Jj6|ja$}Az{G`[=|+ae6_0C(|(nQ50Z`|H');
define('LOGGED_IN_KEY',    '{8g9+sNQ?}I~VK@+xWu J+6Xm +uqQ5i=A-?KEcpy|fIklsV3h)/e,v&nkAn^-#+');
define('NONCE_KEY',        'N+EPaUzZBJ]=UWX&NU_Hj5#|C[W`@gQ*ms]4>-MG$vEAxU7*0uykgrJx@/&u2w(A');
define('AUTH_SALT',        'LR,AyQ%KK)4,b[-!1D/i^s@BqT;4}7BDf*UjzP2)sUJ6)]`4bT68&^lj$?rE1(1|');
define('SECURE_AUTH_SALT', 'uUw3K06T>D!>>f?]nQ^pzdpo.T3|Nq].-FwxUQ05#v}% &=2Jp5Iymd!cRMZb-sU');
define('LOGGED_IN_SALT',   'f2z0xq*WGbRVbT3K% HYK>-p0kj+|.dy9+8$|{yi7,(v(-jW,bwAt!Rfm-8[OiKc');
define('NONCE_SALT',       ']~~hbbiWs=wM{pBe]C}O(!#35`?0akS%(`+$KEWr,:A1S`]$9P:rQ*`t-3F+]|+7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'prc_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);


define( 'WPCF7_AUTOP', false );
define( 'WPCF7_ADMIN_READ_CAPABILITY', 'publish_posts' );
define( 'WPCF7_ADMIN_READ_WRITE_CAPABILITY', 'publish_posts' );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');