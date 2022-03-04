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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'russkirave' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '3CpR4sZrtqjBybLI' );

/** Имя сервера базы данных */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         'Nn7^IqO7H8Id3vSY%VgvfIz~NPi>ag> ]/v]$LvRS2]Lm$OwY{q1r -ZF8t+!b;Z' );
define( 'SECURE_AUTH_KEY',  'WOs{+3+DCHt{iNBQ*p^LW_j|*&[j/qOrz87]|Kzu=M5(JBJ2|7qJ2wX`-mdD[7}B' );
define( 'LOGGED_IN_KEY',    'Nu8-&@(3j0:y%Ii[/^T_0U;fstBd8S^Zus{rxM~|B`{6` VfV).Bu>hyDw+^Y;.0' );
define( 'NONCE_KEY',        'tE2CvancO@5Lnb#rAl*Ju/U.d9Of40I ]ZnrTBS1${V%4nd=*:cAg0%g=!YhY:m>' );
define( 'AUTH_SALT',        '^^up.leNhk48:w= ,nfo^$8e?7B7KnEIT?SO3[@9/%SLhH%ET4#-}>cphQ?cZ.Q}' );
define( 'SECURE_AUTH_SALT', '5zj2d2[5xRW4j1-RR9e)RE6U_]XgWb(hk0}jtz)vFI#=tT9.f{SX6.5TI5.~N-2o' );
define( 'LOGGED_IN_SALT',   '=pOik%>3-U`EqP{6[0yR/_T2tB8VrCt5X<&s[{7A0ME5ju^Iss)*1sk@CC3|VY9r' );
define( 'NONCE_SALT',       'mB]N(<_)VInR?lqUk9c9sE/UyEE[v3|1R1c;)tSsVOYWKswx/+,GkA>sA/e5 vyn' );

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
