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
define('DB_NAME', 'wp-mini');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1:3406');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',+OHWav {_pZp#MJP@Vz/3##-[p+:FK;C,e5S>O}w69^olxX,~n2S%M,&detm3M3');
define('SECURE_AUTH_KEY',  'QOmE6@i@U!13b?>,6w+!^Rxte*9GpJ|@#+Wp9Q]BfgBl5Ry#J2%vD;gJ9`PmepiG');
define('LOGGED_IN_KEY',    'NR|I N=x`Ol`U(tW7:?0GA+_jUBQ$|XL9|;7P~OfsX1B!8Xo6VV{rzT~pz$zhD{<');
define('NONCE_KEY',        '`~+aU/EBi*+Wf)H0lL+n63<S2:#zy|gU!M-+bTP(c<Zc6Xs|X mz:BUz:3A5c#VM');
define('AUTH_SALT',        'Q+$NHFG%wwT9/@$d]-o5gA-I?7[q&jiOX6x95N4Lv0A+oN|-G ),%TKw5H=+I~^P');
define('SECURE_AUTH_SALT', '+*QwAbDF9WFgD+:Qp++W[(gF80!7Bp[$o@ pmle!~M KASnG)W|+bS%KvjS*7lUs');
define('LOGGED_IN_SALT',   ',SOL7,%mL$Pf_2C2L>7-gl4Y8hxPFhot<C&y{vJ 1~7g+^MVL6U^|+A+To8IP;Vw');
define('NONCE_SALT',       'x3U)KhwY<2Xt`4!hXXY:xaE*:Hd$Uq#s.EKl:toA0SJ+]l`}71qd1?Pe*u`ZQ+0Q');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
