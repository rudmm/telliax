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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u182211386_telliax' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u182211386_telliax' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'iRyF$O9g*' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A+(a;rbi>kLGf13kfr4!ybs!s>/-sELyPFmO-,b@LkJlj?M9rA5Q03%[=8lM3QE8' );
define( 'SECURE_AUTH_KEY',  '7Ak{~[4vS:YA!GLmq;ZT34 p:C,W9nKgw_AEy}=z2s`8+9eHc3=;Rj+:YAdsmJ41' );
define( 'LOGGED_IN_KEY',    'EF;EMbq> NubphPiPNHQi9h3P0.EAqFAd5YA4FjZXJ<keI,tD4Zhk@rHuTFoJO,L' );
define( 'NONCE_KEY',        '.56nwnOg{R6j!7o;M]!K^Mlyj8h4A%e*:d,wO4dpLLlI0:ddudVF/X#SDeaj2N(d' );
define( 'AUTH_SALT',        'OrHgSjpNC}T0@= f/1Q1RqUTUteROrD,WrUJ-jp_9hF6;Y2Uz;8Xsmqp=DdN`P;|' );
define( 'SECURE_AUTH_SALT', 'h)e7W?11 %.YpeRVKzfc!YTE1og80.:EP4g=%Q8SN`&*V@Tt(-l_R57qWu?)<(+N' );
define( 'LOGGED_IN_SALT',   'QFo=enW;r%>[]RPFP/s1NWdS`&:t8Rn;?hBK4%i_^q,hhXgIFhn095{N,o)~L18b' );
define( 'NONCE_SALT',       '%WplGAkml$E#}[!j$IwnPNXxWdpLY[2RnL,6_!7ieD%M /+;ZJF25/LQ*73](..1' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
