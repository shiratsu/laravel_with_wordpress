<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'laravel_wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'P@ssw0rd' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#GWbE25;SOJER<53g(Y!KS]Q/E*Y2l1z DP-1^uevH0$$J@7Uj0:|&f^SsCD[8!!' );
define( 'SECURE_AUTH_KEY',  'GYMEUC5pK}QY7s56_%D`/!fJp}E$?gRF5|{p`C%aopArNW{8xTAU;S`-KCT9BZpv' );
define( 'LOGGED_IN_KEY',    'x}CQ7211)s[PLofFG;rKTx}vQcYCw8R!&?ZDx>..*&cp1 z6%VPOf{F9D@7nc-kI' );
define( 'NONCE_KEY',        'j1BxF6s?=sFiD+{s: b(Esm-MfZ;/>DRVa(>Yn&nR}Y|mjA-Z6Hv#VSZm!>Oyap&' );
define( 'AUTH_SALT',        '6Ze@a)AmpT%fG/.J,w`]`>ddAH%xU~[=&04}UGR(c~BmnQfQf%wny1<XbR4DDnQY' );
define( 'SECURE_AUTH_SALT', 'mm 1dz^e,{2l(^`m$5-?=p;#Fp2@% nn+X+BLd0}-~}NiuFiWt29DQB_XB3>:^#c' );
define( 'LOGGED_IN_SALT',   'G9Z1y_)Sis#_fOh#!seJ(LYlehH&o|H88:u}qq[cN2=W<-h~;/!wI.ybm%Rl1>Gc' );
define( 'NONCE_SALT',       'mR]r_A!f$k.M#usSMzQ4<);@%B-?,e YJphHG4%0S< ^p=h{f:oZNg_(|r 2I1[A' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
