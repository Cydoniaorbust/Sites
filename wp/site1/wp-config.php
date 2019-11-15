<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_site1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '9440' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A?@wo.7Xl#=BrN=csQ{HgJ|Q4?uapd)8eb0YabwVi3+w~qC)sSug2^0.rM(Jwp}1' );
define( 'SECURE_AUTH_KEY',  '?]Fe(-0nD3Hxb6U*%jlz5^~+u){.D[Fj EA44`P?:9kI,jc%,{tkAwZ=2mrhZB;~' );
define( 'LOGGED_IN_KEY',    '|Ni`p1|=<}gXW{*t-,W):2YIP.Ff6o5-hB+!#Ulm(ax{f~0n:-={%;h>;{yIJ8Z!' );
define( 'NONCE_KEY',        '3L%9YnG6sZ3CR!!)zhZuh(=I)+9JD@4s*>B[UNzh[9;iiLyum9))6b?Z6Vc>?jx7' );
define( 'AUTH_SALT',        'x({2Ov=&qZ%8}4OZICT7GJRG3f.]_[|b.H0{H-TP&Id2GVJ(<bGEPDArc%#)bJi}' );
define( 'SECURE_AUTH_SALT', '2xj@XH0EFI{VjHpslb_CM61/:xWpSY!s?%g4I.Z?#pHy;t:Yf+?-~kc<Fw{603r`' );
define( 'LOGGED_IN_SALT',   'm1>:YO7 #*Xi(+QUXRa.4K6_WkSMbq7yrSuJqk}tS^6Y;-q8e%HCy.Rf%kAv-9s{' );
define( 'NONCE_SALT',       'S3I!]2<GS FDu,BN%z-|?7YP7ZW61.Ig@;-yn.]I%GR.Fu{~r6{&DM61cr0ev1W{' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
