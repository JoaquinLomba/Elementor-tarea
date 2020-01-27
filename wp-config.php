<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'practicaw' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'L,6|kT@ZZQCe%n$H`Sep+|w_dPdkgY$>JbF_Q0~~`znH6DmX.*~ec+cs{y(nOrBK' );
define( 'SECURE_AUTH_KEY', ':rXwY1uA$#{V@(8aQq`+[aq9D#)lug!xe[rp-Gk$/w0BM`0*UaZyC,`]6Q9q9Dv7' );
define( 'LOGGED_IN_KEY', 'Q,A,r*)ikbq!3KgZxbs{`V`L%>&]EgW4FI;H~+-!|NQUu*d.U=uv*U7rr8q.t^eb' );
define( 'NONCE_KEY', 'srN.uV_wHT2%j:AMluV3iT&qM4|/6gk=(Vv/;6GL3Fr>/A?!NaBJEbEHG#4M;f f' );
define( 'AUTH_SALT', 'L#V`m8q!$OP4Dz1io{_ax6sURKVw`65OcC{6Sn!(=M?Z^~t<{LV{BeMM@3xmOU`r' );
define( 'SECURE_AUTH_SALT', 'HW6lxhff`gBfjh.vI,}[j< d0#t-]Z0.e0rOMSxL( yM]5_M6}F>jB,t3bsXH2$0' );
define( 'LOGGED_IN_SALT', 'kKCr;`{@2Li4_/f)$/]BKL7|JFE9~Tg#n6!b,jbrcZ-}u5j9^x<&9=t_l~+fdR:5' );
define( 'NONCE_SALT', '+/KA-JE8St!(ThD({Nu8C]/*v!X3HJ}{74|+S~f>(cv+d<BP`/B$54d?kL1(3vo$' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

