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
define( 'DB_NAME', 'rumTibet' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'rumTibet_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '224100' );

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
define( 'AUTH_KEY',         '=t#2_$3!pbR?<=a{{l2B;Hwg*{O-m=:%hV53P(tX`]=_{Ir~8q`LABBRBp7n!O65' );
define( 'SECURE_AUTH_KEY',  '2/u&y8zh/L)5$(xPM&N!N#bClt_bn=)IaaYw`*[FKH3y3cU`Cg7.6&AWoTvLU5z@' );
define( 'LOGGED_IN_KEY',    '@ 4{jb~t(Ps-0AL?m%Us{Xpk+:8#B=%>k(dv%h]V])m-X@_chVyg8Yl1Hfb3-;sF' );
define( 'NONCE_KEY',        '(r}:P.`N33hbTozrSsUFK7wwS[qs^SQH.;LE98ct)N!L*aYK,7T&nB!k:j`1G84K' );
define( 'AUTH_SALT',        '^BfDI(D;.}ZEnrfdMGg|Zsi-zSgiLXt*o`!:b2_(6TiQCn68 Elh+Aa)nMRIPi6j' );
define( 'SECURE_AUTH_SALT', 'vc.Qn,k9=c+m&e]Nf5FHExSPo1J+]TPD1PA,G-lG&jAnF-Y^xF|N B(/HeJ#RsA,' );
define( 'LOGGED_IN_SALT',   'w.G1:h}M4D^=[}-ctNoF`HT?g6] 2?I.YVqfqb;=-Ra=C&mGXC*${F9Tty$jW$#y' );
define( 'NONCE_SALT',       'P}Q@Bz9hY[c*<c_o^hIOKNb_86<PtukScr6.Y_f+i.p*4ns&}&n&ewZ~>vB?hI^O' );

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
