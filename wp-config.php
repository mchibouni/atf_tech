<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'atf_tech');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-5Sw Ll%:.3=VZf=I(BOrWM,^%Y!V&#7KnZawZDkZ}2 zCh*|{`(0 /&z4^+4Dbh');
define('SECURE_AUTH_KEY',  'Gt|sL>J$aZ<{kW5[4W]rS?Cr^r*x>P=X96,Ng[oQ|TF{T0}%0{*nt[a#|;<IC|E4');
define('LOGGED_IN_KEY',    'h)>w.T5y%c 0s%B?Xz5}e5zDJE$@^jR.C@7Edm=3xvv+odm1V*H5c) fY7LQ4%2;');
define('NONCE_KEY',        'JKmUI@t]D<:JoU1VYR?EW-JM>.fe~S|XL.e-_/0!yi/b2,?zpqS_t<[<0eCkfumf');
define('AUTH_SALT',        'U$42[Wd{+6bfe*lo|QBE|Z!2+QxF6/kwS&65E,k>.w!gRfC?.)!5wqtTDqGs#4Jt');
define('SECURE_AUTH_SALT', '?g25?==E7S7(_b~]e}_wa3{mEB@+-Hmw[i3 1v)K=E}gV9ZaN[LJEbo|DZ~Yka/p');
define('LOGGED_IN_SALT',   'E7Uh$Ve#XNdiZC5m14/,z&_ED6+9KM[)[<MB*w(h22.2BW8Cyb)u[VQ+,M7hgzXT');
define('NONCE_SALT',       '*eE9])7DNK9;vZ8wT,XYQ8 jC-lSYO2mmgTzmcsXG4FGyQ!GeN+6^8BTgX%%0y-Z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

define('FS_METHOD', 'direct');


/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');