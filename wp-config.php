<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "san66539_sanyfuli" );


/** Username của database */
define( 'DB_USER', "san66539_sanyfuli" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "Adminsanyfuli@2019" );


/** Hostname của database */
define( 'DB_HOST', "localhost:3306" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<eKjg`P-N5h.8eT PdvY5$cHc,i7`r,{&Rq!Q:w{&1>1uDJB)8QFrux;L]c=i[T4' );

define( 'SECURE_AUTH_KEY',  'AHSq%3n|u(*Q?`q^0n&/yAkeVyX&Fwv)vuE{otg&5n@.o:xQM8F&e1(K}8c eg+L' );

define( 'LOGGED_IN_KEY',    '7p&V^H^w*cT%^I)wRCNF?uwosNfd`w=HeOJ;?v&0OSUAkrRP#3/v,yKCsA2|aPo<' );

define( 'NONCE_KEY',        'gLm7$m71#:IMk^pDo_Y&M{&4dbb5}I|S`b<^O}[>j-9Owh~2dl_4%rzkE!zg&$#z' );

define( 'AUTH_SALT',        '1O5$6lJW4olVp$}V/J:o~3AHO7}p0.&6UP8:^42<1hd7~-bU7a +ZKHUig)YK9[^' );

define( 'SECURE_AUTH_SALT', 'J!$c)/~;E1eQ@T*TJEe*KV-=XG`NR#k.(-1knzlqZKRGmY2~M9NM).q1xYx8}By/' );

define( 'LOGGED_IN_SALT',   'PP%0~iN{&`Mf`eTm4:GzrLJ==NuB,-?%0JQQWvhJICU^7$KNEeyk7j{6?B-+}cMr' );

define( 'NONCE_SALT',       '9zAOk{nY;83x#fY4&#O~n-jcJKRo~R4E.7t:^%NkGbY4Xn1<&L2g7x4#4,Crrnjg' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
