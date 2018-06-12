<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Data');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '@Cqnttptrpf1987');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oe/M2NIvX,Ft=5D#ERJTzo]){k?9fc#6DA|,1WH0}/gcue-2Ckbs ZE~*k*`8ncl');
define('SECURE_AUTH_KEY',  '9NyVfc+?tg)*oZqfo;esyr9$N<jZeA%3>r6<C}mH)7cA&lssTUmL|InlOgn*C|ax');
define('LOGGED_IN_KEY',    ']+lzaHeT8<!(Oj+On~f/25*$9MBj6}L}Im3lmE|v-Xh_aD6-8-PYEyy6,B.)MwWZ');
define('NONCE_KEY',        '/:43$UdYo>W8|Vr(Dv=*2%ziW,#G!e+kd8e4{i${64XxiVx_0tRY|PLuGEc/3Tq?');
define('AUTH_SALT',        'J7@C[JA^KDkDZXHNdixrM QlH*S}))X)L)Zu#H/me|t)0|s->*j@|Vog*BAt> KO');
define('SECURE_AUTH_SALT', '].Wv&34E=1_K1Q|;n`]q|W,DPr] ~*b}N.s fo{spHNhHPH[Js,+mDvI?KlO3@@5');
define('LOGGED_IN_SALT',   'R!1{Tf:9utqV@8v]ax?8;!,cytk=Db, 5L*y=g`d.C=h{&!1oMaI;pNBn^/m9~$y');
define('NONCE_SALT',       'YbLmy]/23:~1SP>Q$9,1J%=QT($6+pm#w6LlVINv!km-?r_wfnY)~CU()!,JbO7D');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
