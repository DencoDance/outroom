<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'outroom_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9b&8J+X}Naot+!I?[#UfG<EYK#1@q?jRc_ |&7Rtz-c,0+sztkUA|nv}CB5cEhn~');
define('SECURE_AUTH_KEY',  'mu}!-V$CV(fNFsbe8<A;l%_hze$yr{sH[Lt_;m|cU4ld W3ayX>*ybSw:W z8|gG');
define('LOGGED_IN_KEY',    '@Gh-xx`YAH8k KUN+p0$b}/z|= 6062UI/?nW|S-O1qk+YVl9%G<W(GP(6|lDtbe');
define('NONCE_KEY',        'JH}W>.pEu/Ab%U.n~4gA-E<72GlRJ@jIjSW(,!|i*KXUCviBa~=87<VD6zO=31uI');
define('AUTH_SALT',        'IbaRAIXaZ9.>S(HJ#`Q2;!;Mwg0u3A8wPK,BI<>hTUu5bENd Hg=y}EW|-M)tmId');
define('SECURE_AUTH_SALT', '+d+_3q7Zz42MQvQHYX|P6mGTiZ]n`h]%t5%+EVnqjfvr<(u!LX9w>v^Ma@/6z1g-');
define('LOGGED_IN_SALT',   'O9^k/1+1I}@>k?cnzcBdWDkxk~>UD;aI4igon 2qM<59sC[d*_q@<O*gF>TGMh*?');
define('NONCE_SALT',       '6MFcj* FA?rToiw$z#dv-)`LIZHaM9c}vb.Qa:^nhjUIuVGw:HTn;*P$Z#-6=VGI');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
