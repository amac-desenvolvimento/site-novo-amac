<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress 
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'siteamac2023' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'siteamac2023' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Suporte7973#' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'siteamac2023.mysql.dbaas.com.br' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k%0=Ae|/,<o?3`xgf7x+j(k`U;m7{-;s5@T,!TC^EsQ~X;?E|%01.F$.=WqT~ks,' );
define( 'SECURE_AUTH_KEY',  '/7Oc9n]}J:Fwp)G(1q` TUM_m[FAb<e2^fo/j gB,J|ga/$F|^1 pFKBqpm.a&a`' );
define( 'LOGGED_IN_KEY',    'W+gY1~3yof>v_WsLJ7oDQTKC>hl~%*Nxk1P6B^)|G/(g^*f{9f%{5$b0s^AC$lCt' );
define( 'NONCE_KEY',        '``8HtTa!FzMl;J#pWM2>:rW8B?HY)#&X*By$[n7c`14gl*axf8e.)MqVN*EK3s1b' );
define( 'AUTH_SALT',        'smJPHFdfM@.|*ywSbT:}#C-kL+n]QACpGg-<1R?sj:bZ b7(5&UM&`srTyX2N#l}' );
define( 'SECURE_AUTH_SALT', '3$.H#0vRpDTiRTCs^|hw?JyI%-{xt^!wr$]7l*ap2zr[%6!JAw2w%p#[;YHG2692' );
define( 'LOGGED_IN_SALT',   'swPI+bOQkK=myWLfP1/)+c/M2&=M#;Cbf6_}Pb8c/zNhwW_LI%P]r2B4i8?CB`2 ' );
define( 'NONCE_SALT',       'w>J`>sa;kwkgj?!nuG/``&94>)[o}|E/<JWl6BO/Rd~rW$0zrO|JmPg9v23:@x#]' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

// Enable WP_DEBUG mode
define( 'WP_DEBUG', FALSE );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', TRUE );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', FALSE );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', FALSE );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('WP_MEMORY_LIMIT', '512M');

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

