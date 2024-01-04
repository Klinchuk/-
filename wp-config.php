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
define( 'DB_NAME', 'mywp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yxGlj6Q0~.b+39Dezz~8WHq7e[{++~eflW!7JgDsw5%L^>]_W<ut(^s:?MlaLOkn' );
define( 'SECURE_AUTH_KEY',  'u?le]3bWhij>Xxl`EXZq03=j~Be9Y}rV%F7.Q>URhQf=|F|HoPTD~M8r=]Z3B0qU' );
define( 'LOGGED_IN_KEY',    'QH9dPZ8K0/E?7(i,5v_blMc:^B0$XxwV,d<KtKG6lW(H;hf7&i.e-&dp%EH}O@#`' );
define( 'NONCE_KEY',        'B7g->kNupD^P{`:92|O2CT(f(m4}c1TQ$Cr66rGdh`3mT~g4GS-z|E]81A[bD]l?' );
define( 'AUTH_SALT',        'wULILTr]b%]yG$;(fUiZJWQ/Om%CPVpi#cYRp>qQ)=ydCS-I^$/jUv3DK= NLp 4' );
define( 'SECURE_AUTH_SALT', 'c3d{fEE>>X9^2]RyA:a}A|Iq@Avg)/lY(~<gfg/3[UQKqkIH=O2Dm3=6/5V`!>U+' );
define( 'LOGGED_IN_SALT',   '4+`s;)2<V?uY:J:_CQ5+4;`VK`E:ugQw(6,SA] Y.L>[iLkR*^O<I=n}:Z=,E6w$' );
define( 'NONCE_SALT',       'jKg$e^?@gIry{^{LQdeJ3plg!Lgsw/.9lbKVaRFtBHZ3y=QE9$0blz=<]ruh0*bF' );

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
