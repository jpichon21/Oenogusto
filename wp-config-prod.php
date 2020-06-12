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
define( 'DB_NAME', 'oenogustlycg' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'oenogustlycg' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'EizJEYVcRra7w8E' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'apj1{/P:#Z;%+ltOq88PXFjq+]$#Op#B,S03v@LI7-PrqN!A?km%#:c:8XVF*N=F' );
define( 'SECURE_AUTH_KEY',  '_={j13Xv;=)kJqdUSu:yXceoX;GCb/Tq4)G4~[.9~8$t:WVRFM%ArmKfKA<RE#kM' );
define( 'LOGGED_IN_KEY',    '(+D1?a4V:-+L8R-PN-+:@:UeS6gh(<yEYLG_r{>Rtwf?.]V_mo1)83P/|YYFnu@ ' );
define( 'NONCE_KEY',        'ZlhmT-E2dKE(tQLt0leBhed;v3XYHW{U.|hM=/<mKAm`}#o[KFb@jTSb]Lf(P-m:' );
define( 'AUTH_SALT',        '=NuTQ^w_Kx^bK`,>HRk0Va/|*/w.QA5Q3E5ht&!Pp:V>UVI/rgr!HI*g%nR6V`G(' );
define( 'SECURE_AUTH_SALT', '&EksM]=jFtOFh.l; #n-LI~!dil`PF&gC;I{`c/7C2n^Y5/.xNbuy2bY)@GX2q6R' );
define( 'LOGGED_IN_SALT',   '|C!HiUfi|BFx1$)u[yj5YF>FpcK`J Kk$PF1IC2l[uf-SFO/;RI=?e=K(t&OGUXC' );
define( 'NONCE_SALT',       '7k.PCA)~*^H,lnfg&mlg45A?11FwYa`RMI!:_njYQZVXsGj=]>/E;Ydm=ao8.PL#' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
