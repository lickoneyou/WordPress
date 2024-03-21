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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/childhood/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'child_admin' );

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
define( 'AUTH_KEY',         '{-}VjI0KY?vsIrWmVg(ie;+mub#x]fO[}_qo8+F//-Ero9=eo}@#tWk:1j!<mugl' );
define( 'SECURE_AUTH_KEY',  ';<s;O(F<!5SNjZ>*x0+0{BSarFNuQ1^I 9hnKe+I)a%}7OfnM<FCHJvg)M0rWBQ+' );
define( 'LOGGED_IN_KEY',    '2!wTcUpBX[jOq!|s5|M ~fB<HU/Jfsb|_6V_]+S53B_L6F,jRX<,]Vzh_B4rRgb*' );
define( 'NONCE_KEY',        'M(fWca (F/Sz=(Jqo?=rTV;dhp%<.8F:$wD ?SZr3(yJnaxWKSR|%QzkP$Azs?.0' );
define( 'AUTH_SALT',        'gN=|LHl{R#dk^nAwbtS*5bpkQ5/[vl@j799bhL!w}xVnwh/}W7(Bs)a.&W|,7$t0' );
define( 'SECURE_AUTH_SALT', 'X_%,fuS}O}@WB6Y%9u7Y6p^_+*^ROeH ,xJ57j1}3@@IEof2sWlXAeR!Z#tD# -k' );
define( 'LOGGED_IN_SALT',   'e$E?Wg?-uX/a& PG:9I5I_YrZ,Z> RxowNNc+X97nQ}<5:Q%;Ahuadc.pH|)S966' );
define( 'NONCE_SALT',       'Pue92B_ZH7U0d%Hr`T2k4q+O~qVI4SRR[`:DQ^{Km%n/|S1>(Ki(Vj!_ZSb7j^A_' );

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
