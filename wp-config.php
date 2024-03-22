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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'H' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '+)72P,BLRp4=YxBlmm&X$Xk2m;ynS8XRdKK3ALX2=E3_s+.)GP1&VCR<povT14xh' );
define( 'SECURE_AUTH_KEY',  'ubDnIa;LhD#<v+NJ+HmGsGlW;!:M#gd&&MtOW$94DePHp3RiF-t**,:?jqAk:S2b' );
define( 'LOGGED_IN_KEY',    '!137+LIW/.]+4.6GX.pn5o:D%~e3_il1O<J5CZfqt.b*hPsMGZ>fN;e{h>L1n!h:' );
define( 'NONCE_KEY',        '3E3b~F^[+z!@Z{P&l}d$&[5@:Qqp>=i-[atZj&lo( z/+0~?Aqu4@>]IZ~l{f J{' );
define( 'AUTH_SALT',        '@f_F1(#mx2?OZi7`q9?lAnGlWVWf-5=l7r//@b6>7GkW-- y+ndVP>ILki?vU^6A' );
define( 'SECURE_AUTH_SALT', '9gksua$-0g|g_5#}[yNDtsJ^Hn xK]T bM#u4m2SF#G>,Iz~s}-E ]yFCzU>|-rh' );
define( 'LOGGED_IN_SALT',   'uhbEZ`{YHUl$Cc`+#NIaJ72g9=X~l/;8O@[x0F*+UT7(Ivyj]A{AaqPyzZ!MN^FY' );
define( 'NONCE_SALT',       'ZZ#@(qx|v^({dlbdb+0*u-/aq6o?iZ6P=tl[AuPQRm{Aq@a`tvLY+_jK-qO Ev8X' );

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
