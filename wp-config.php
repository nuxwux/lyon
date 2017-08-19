<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'villedelyon');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '1lasagesse123');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y#m94<Ud<fTn<2Ml*E9Z^1TDl@t.l0!P_D+#M1|Gdc_E_(>6{7-_%tCJpUj5-Y|^');
define('SECURE_AUTH_KEY',  'eC4e5D6-l<@=|SHg-:uKel=wNgEUV^bZC{))mZ~}E2~Dr:zbCFM1?NYASNYgOiJh');
define('LOGGED_IN_KEY',    ' y=Wm18.lq* +_Ma3.?4EpZ=.sN<B yzLueiUx0{]x-]lj4Hxsu(<l7f%.sCpF_v');
define('NONCE_KEY',        'V}!p|1u1<)N12D8P-VV]8[B|=njl3kT=+=LLt!p~CI{z@aL{1ka!U|l/]w59Q>>c');
define('AUTH_SALT',        '-A@M{Z~Q$MC$xw++~|_HA_?9[v.!W#|dXjB-:f[3#= `-K#TlQ@K)mBYQ$/EjM`e');
define('SECURE_AUTH_SALT', '!joMMosE;L.R H${u{/+n):(_Ox,g}>&E0xDGVg[B/rYY4CFN7@<%Ya6/--4,Gqy');
define('LOGGED_IN_SALT',   'dS?/fDFdQ~OO>j_^6oDG?EqwK3Gny(I4Z,,[1gLVb@8x|qOpJ`)Z3zk-f0RL-Gua');
define('NONCE_SALT',       '`Ii}T[f=DvOPQ?I(YOBTb]vj|:JpVRuu#;6QALu`GSIeextj6P@K62@q -;+r7LW');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'nux';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');