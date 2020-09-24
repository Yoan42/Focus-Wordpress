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
define( 'DB_NAME', 'focusWordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'k|8UqFYyzb(oEL^k_-ISvkf*$:3NJtTT&)oT*L+u1W888$WLJ-P<OKy,8M%GLTV~');
define('SECURE_AUTH_KEY',  '^<f[slqD+02m4dI_yT +anq/@4*wxP|g$6e0F16oV<4FobYy$Y5LpB1 #(2JAa<W');
define('LOGGED_IN_KEY',    '<yo<5uErApaPp]xy$Y5O1+j;bG+LF+5T,(wq,|k)k,Bxy}54r=) W#lR5#t0RSAG');
define('NONCE_KEY',        '+2R*9%J(,?H0.^7&W]{Px;5O[eD4quZ=+m)`*wZOTH{qj`9m%[n?>G`[WvhtA8Bq');
define('AUTH_SALT',        'N-F8+pJ+e`kcdX}sB?@(oHAr/H|$a%}TvjMU_ox*QcrA_iA3-@djU;xXDav1&BIh');
define('SECURE_AUTH_SALT', 'T[?S&L<-#2D&LZ8`E+TlMf;tzM@hR=tj+XP1x53N-IOb9s=C;GJY3du7)QH]{lpx');
define('LOGGED_IN_SALT',   'lQ1dl<WyM@EJ;-ug0;w)?DuM+ZL@)vA1!_);/M)gbO^nW,RbH)blMUY2<C`z;;Ta');
define('NONCE_SALT',       'CO_wG&EOUH+h]@zhcV<6zM>,DpX&Bx0D-&8JonY:w}m:9pB?t(ov?L-aQy*/t?|y');
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
