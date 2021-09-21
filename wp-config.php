<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'explorateur' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ereul9Aeng' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{bmdT7nt=wzn>5`xuhq42EbuI#A<}.g_}i#*)/sSH@ fZ=L!ZDnQzxuecDRa)aJQ' );
define( 'SECURE_AUTH_KEY',  'B2&e+T}dhKPem(I0BU<w7p6OIoKnM`<|!9F9;Zg(;g_z?XvX,ZE! OjtUCHt)oc_' );
define( 'LOGGED_IN_KEY',    '>Z!1Q.2|R@x:#%aSxxYJ}wdvt4t-{;$ojbh?;[Iw^2;j,=5=w3dHMs_1p2NgY?30' );
define( 'NONCE_KEY',        'a2cm$l`&%C,NWK_q?)Zc$Y8fNw=m$!_`H6(7pit0oola$P<{g3bvBZsLm@diIW`o' );
define( 'AUTH_SALT',        'w7#&!kTWwBMWJ/hqj>,CU(*PQ#s{)$(y>K7!};^dg *n`_#);c)<=e!29&G$kx~4' );
define( 'SECURE_AUTH_SALT', '#r)VX0wvO$8UU>Pf1?vM9#^m$cf|X5N@$julA1`?H9Vm10}<}$`Xj@y]c0}_Fsqj' );
define( 'LOGGED_IN_SALT',   'P}6 EaF:?2I`Cqa|#;ZbPlB#i&i713y8KgW7%6:kzcgZ-Y_MZ!:~g6dJ|0T)BRf|' );
define( 'NONCE_SALT',       '*Ly cd?sm&=?D~o2Ae8i;GQM.UG8XvkB(X(G0b-Uo&*whpU?nJIs`4J-lVu=[pTn' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
