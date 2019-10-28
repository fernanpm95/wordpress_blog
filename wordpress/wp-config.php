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
define('DB_NAME', 'bdwordpress_');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '{GFHli*bjbLw3M]*hT<3ZKMR40cORKP|C*zTS~`FI<%WSl&=Pk2vh|qx9884rP^R');
define('SECURE_AUTH_KEY', '(e*Xkz<VA*y;kc+QAoX6!xBj&zf.6)2r~gozs!_s/T&?Tw`}1=<`^},1;H/WC4!@');
define('LOGGED_IN_KEY', 'C?%/%-AU=W)ql7513k8jy<?wC<o;,q7b>3>9nLwdts/~T$O^0<c~Wo8>FmVw 7*9');
define('NONCE_KEY', '#lo*ukO{`T/p!1AQS7L6=FowJ[5dH6!f2^>tzv!.T}h-xx&k/fF=vpQK/Ma:;[3v');
define('AUTH_SALT', 'KX}YQ$U]>~W4Heb8s3LTN&?]~Qha}dIOw?{i5v43I?a+U1Zk] _]Upe>sekp:{`y');
define('SECURE_AUTH_SALT', 'xAovxiNYv(daVGP)S1issORp6a*O)LG<_ lO@Isv2orJ)1NKvX?O|aeFa}%PByyn');
define('LOGGED_IN_SALT', ':bG0nwU_.P[zQHx8OuPuq%gFaC7@>r8/%=1WH82]SZwB61n?f[!}$p0;P6koLEM>');
define('NONCE_SALT', '~E(a?.S1,ugWgwzQk[`>|gIOD$f?7j}61/u(7M[)r.Wf9XXl9Y$*x-~L@ZE$SfOS');
define('WP_POST_REVISIONS', 4);

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cw_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

set_time_limit (60);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

