> last update ***config***: 10PM 15/11 (huuthang201)

# chạy thử web
### B1
- tải CodeIgniter: https://github.com/bcit-ci/CodeIgniter
- mở folder *application*
### B2
#### m.n clone repo về, lấy các folder paste vô *application*:
* *config*
* *controllers*
* *model*
* *view*
### B3: cấu hình database
mở config/database.php rồi tìm đến đoạn dưới và cấu hình lại cho đúng rồi chạy:
```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'web_app',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
