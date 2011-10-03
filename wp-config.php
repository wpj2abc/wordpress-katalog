<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'jettie');

/** Имя пользователя MySQL */
define('DB_USER', 'waltraud');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'cOWtop2n');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost:/tmp/mysql/jettie.sock');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}vC~H0e`=XmBMpU`CNklD~{3k0|q%+7N H#C&*i?#G}Au!Bfpa&&@sN_uN+Qi!Sl');
define('SECURE_AUTH_KEY',  'PvJztxe(mRn0^mu]*-bLj=kNr0`mj[u zjc_<-T$LuHbar_$^(MGBt|iP{8+qB;&');
define('LOGGED_IN_KEY',    '[c.a6=+V=2|]|k,-bQ)(bDP,qfJ6A,t=f;y,>fro!|AFA%]Go+lDwI/+%cm!sB|H');
define('NONCE_KEY',        '7q`BBI5~V1=[Ob,*}F|s#+,h;TD+N+<G8A%3Fu*MSW,i/Yv}Y/h&!zV`nOO6Lx?E');
define('AUTH_SALT',        'K)0|+:cEdLC:*D:vO|Kk#k8l1l2i;Wf67kjtbFxs<TUWIzmAm$!*F<yyQv5S((NU');
define('SECURE_AUTH_SALT', '}K |[9!*bEl=Z9$|WS2Xi-P2`Nd_Cxi(dASR>!63/LSwb<*@o)BTxiQ <C,0}ogN');
define('LOGGED_IN_SALT',   'm>|V{]DNg~#_lOJa]*M=<n^iu)sht42#C|3m,O||lxm$aS^Q.<Z.zDrrw<cTe.t.');
define('NONCE_SALT',       'V__`V>xTk*4/y)!CrA3MP&d)U9rl8_s8GYdO&m/:96ol7)x#7[Igv!Vr7I)w8_kZ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
