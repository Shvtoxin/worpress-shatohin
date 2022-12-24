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
define( 'DB_NAME', '5terochka' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '@(l4hw@5+_9HT&7/}YyrLyDTUA)G=XxW^hD(hOxyq)7.YU>B|Sjs4C]Ga/%&vUxm' );
define( 'SECURE_AUTH_KEY',  'bO/ldobiaU/qYtfpIi7o~EFR$9ay/0?eRKf$V[s?wVq?uilt?4;6F@frfN]L;i {' );
define( 'LOGGED_IN_KEY',    ';Mb*Mw=mSR4I6f7_^X:$y!mYm=GiWgmjc(1`GRzI^+F$7^!@3>?84Wih</?+)52Q' );
define( 'NONCE_KEY',        '{|betGikO$ET]l);>)>{~fP=%w2tj$@sKRCA/:e%[0u5kqe*]WMm}&vMJaYm.^ +' );
define( 'AUTH_SALT',        ';4E:4Y4kAoPGidFk/-7o_o{VXw@6,1bNqExvK<aOY_c;tS!U}Z/%>BVf{K&Pr:tU' );
define( 'SECURE_AUTH_SALT', 'B?fop#mO>@6ztFFu;n6XaNUtYAL~%oD U~Chn~ 55k(L_IEB%T!y&iAVNtp.JZ.Y' );
define( 'LOGGED_IN_SALT',   'g9a[jS,YW?X5WyHv&~LLwp3T]}^`+Z_{Hd,{M=`KO0D)*}x`@5Ah+Qmo0-.,-~:k' );
define( 'NONCE_SALT',       '}MCG%mD`NK6;UOH*pEcVY.#V8CBB;$1$J!|mOg];HW).-7$9*kQU A3=bV^RrBB&' );

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
