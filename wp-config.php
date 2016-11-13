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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_63bf7bc898a94d1');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'be8a7f5d7ad4b9');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'c0f025ba');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');
                   
/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(zry0]~*#5rqXH~jbA>_0o3]zdPl;,UBJ],JSAh9y+*-Up^#J4|?AaM`b6e_-oyv');
define('SECURE_AUTH_KEY',  'R[i=i8|yY`p+}F917Yb{%[Gr`jlcJ|.z 2[ Ek^Hg*^H!dIY4U %``U]r]-5_Xb)');
define('LOGGED_IN_KEY',    'Q*G!v~#5Du%i^L:0?PI|{M.HSR5@AT75Wx,sS{J$qq_FMgo8*533!k@Yu*g;_qus');
define('NONCE_KEY',        '7Q)L%/}46L@TV?feJ pr>>{/o|A-^+4ElOU_F>>,[|q96GS(/C^W<Y1}dja6y4*c');
define('AUTH_SALT',        'v`!qA/Rp^iy:XXyzf2AM.8DQIgpuE<@C;fpE4g(<>el]Dj.+Hn:QHj#P./*sO[UF');
define('SECURE_AUTH_SALT', '>-|Vtpp$MzC-$9}hE+F&l8P7e qknC{-ZD3sv$o<t$4rY<RtdA`${u}U(E-Fz3pi');
define('LOGGED_IN_SALT',   'RpW4><g+y@{ACccyd5A/5T+?Rz:w3=nq,j+QK#Y0#mF/5%%E^SV u~}rK(y-Czd/');
define('NONCE_SALT',       'dG`:.Hb<tw,~Z+ajn9xP:3JAA(0UCDX13xlj:n+}-)nt2|MsK&lW?DLRl&^oH_zm');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
