<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'WP_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'KarasGolavl13' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'klh Rjxhv5=T1RC?944>q[#(7^36vt`+wKbaf2u:=pIy(*$Fhp&Rca:JN*||hDh4' );
define( 'SECURE_AUTH_KEY',  '4)bN2?agj9XCl;=lZr)^3d59X1Qh#FX`Bl>fr::B~694_jJjRR#RS;mye>ANr8}?' );
define( 'LOGGED_IN_KEY',    'ye8Xa,-Gb]M&C}pO0u0c#5xx[)dk>d,XNdxgB H^LaY9:O2M<W~RubYvPx vOiO,' );
define( 'NONCE_KEY',        'HMo[go:#BvB)MYQmoPN)ru&pFBtfYj:j|TcQt8?gvxK-peZSm:>Oj@dO<d/1Z|Fg' );
define( 'AUTH_SALT',        '+4Y=e[_2O5$9]ZUJYBxPt-&~^MNZ24KqH-@7,2K63r/#Ab<CGmjfTtK?9nic5OC~' );
define( 'SECURE_AUTH_SALT', 'F_{C9y9&iS(4ol+PVNn>:Q$J%>:@8F-D){eC_[9|t7l4+Lc*hC^d[bVw(eCavx>P' );
define( 'LOGGED_IN_SALT',   'Wbe3So&H:JNGkjZdMK<$GWz;kHJ>.GK4TOHfj37`;@[O$3=hBgn$wDPmV&j]?4?I' );
define( 'NONCE_SALT',       '!;NBs)u)>9Rms<f#?CP;g@RYR&db)OkwINyqTDv^1pF^DWDKQiJx(WG(T*^1t&m{' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
