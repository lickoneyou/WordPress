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
define('DB_NAME', 'rumTibet');

/** Имя пользователя базы данных */
define('DB_USER', 'rumTibet_admin');

/** Пароль к базе данных */
define('DB_PASSWORD', '224100');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define(
    'AUTH_KEY',
    '{>!9cK|<9Ikzx]czQW!b1GxiD?bE,D6,:_oA*L]VV!,|u+(T,#b]I4gN7;RG[(#]'
);
define(
    'SECURE_AUTH_KEY',
    'EMxo7u?WCn%on57Pj96kq.I+[ 3OJ5br<f#c@[OeQ!:]{SIctE$xxqt*ebGnIG3z'
);
define(
    'LOGGED_IN_KEY',
    'bgN?tw%p]QfV&Dk-`EQbY6qJGm!jH9|!aZx#44CTb.C8(CR,jRw0+~f-m,@?evPA'
);
define(
    'NONCE_KEY',
    'DI1X#occ0J?v~MXkjA/[_# .ik[B@QbTA7voU2ivhMZ}|LJe]E#Is_.P^88;~`M,'
);
define(
    'AUTH_SALT',
    'mo!TpWL!pl-Gu1kpkySu!:,)UN0XA9=zY<TeL~l083nGGUyOKT%Rpq]t:4$jm7O$'
);
define(
    'SECURE_AUTH_SALT',
    '(,YbLe}>A*%d @^HHH/|Cz3IM>S3-fP]k(Y0h-}Mbq$F/92Yhh|t(zOSW;}~Bn4T'
);
define(
    'LOGGED_IN_SALT',
    '5yD>_rrj+9=FN1@(p%G=477F6wVGU`tA.k*rGsMO?FJIa5TtxQ{?(,?wg2ZAgegS'
);
define(
    'NONCE_SALT',
    'QB$>c}VF A3~?;P< 4X4JiPF[a6.?Gs9{||8b2F)2^yrDO+Y09C1sa0(#-YMuCeH'
);

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

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
