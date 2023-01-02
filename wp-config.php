<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'udemy_kurs' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#wq.c(f<i3v1N0o4&%u>exoaYob{ATQ>#3XGe<`EIdr<wDVN>~ pX{]tE6$[FM53' );
define( 'SECURE_AUTH_KEY',  'Ag]h3k6(-171ps(m^.IOAhW-)PRnz_Pl:r-;Y2Z{nWD><<lG{Wb4Bjfx]48>[8ly' );
define( 'LOGGED_IN_KEY',    '(JqQ7ZH_od-]96W(a}uAr.G|FVjcc*-$1mGJ+8%yo)ju6$.q+/5w+J%<L~~kFJbX' );
define( 'NONCE_KEY',        '3jSesYBnXA$$R$jyq:-I=M_7vs>u46ifG*UZII/#q__-|?pR_<e!QEXhL<vv&^6T' );
define( 'AUTH_SALT',        'Vzp6?L=1PHzFqcD^QMZ[Pi#Apc0N>s8Dq TMD~;nEm9_@pXnsHA6jRdXG.A#fgI(' );
define( 'SECURE_AUTH_SALT', '2p@E|.g/w9Fm$G X-_9PGNl~%OCI;8?Z4x.>NQh[Y9X-98- >OF>(6*XECQ{1j3{' );
define( 'LOGGED_IN_SALT',   'T0gFujMTuKsIbA,:F{$PdRe4f0;w@FD>}f`;LVVEe$i%i01]<da1kHo[+n]u*Z@x' );
define( 'NONCE_SALT',       'K5tVNn/_9I^Rw:0AC@o:tZlccEY6g1Et0jP5vW/zIPV>!%nwvl&wW*O-)3TFZ5m(' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';