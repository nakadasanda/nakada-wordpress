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
define( 'DB_NAME', 'heroku_4650c164185751b' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ba4ec1c0cc7f02' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'fdbc3616' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '$PB~`#q<s0Wo=KWIpE{|C@Dk&b Mq3u$>20|B]WrCgeCf3SyMh|[zq!O(oQ?A197');
define('SECURE_AUTH_KEY',  '[qF$8h[RQ+D+D,XlC73e^o{R(K@:|Jo~;S@>0JCfow=5>zA+G6oP(+2}c::wa4>%');
define('LOGGED_IN_KEY',    '<bd$bJ_WJh=l+n2D5|Gkj@ZE:bE^ 5tm]h7@-PSM%L+4blR+F{!L7Y[5CJA_-s:m');
define('NONCE_KEY',        ')[!I;/|a{|P5mN7sWS%:+cAy7z&G/(D+^Ke0Dn)#B`IA.pC.C.L9r;saoteBny~J');
define('AUTH_SALT',        'S?mG;?K-+%I`^@5F3SHf;,zp:H|Q+$}d#4E2,zyGQ(!>wk;@)AO,N*%PCSS=XrQN');
define('SECURE_AUTH_SALT', ':ZwW~*TF1TF$j*lL<Z@9_bQm[.-ozJ_1;?]Vqfag-3RUin<Av+s1DPJ<xX9-khNG');
define('LOGGED_IN_SALT',   'ZnVB{;_-zzY5f;pE^ZIW}>;WLuj$`fE1N2YxMtVI/$.g>pM$ /FHdf,`4k|oU  I');
define('NONCE_SALT',       '-&@+s2/}V1VgKhb,zoQ#H$(;SumrF+Q04(}e,u?qcBee^joR]B,pVJWrErXq|,/1');

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
