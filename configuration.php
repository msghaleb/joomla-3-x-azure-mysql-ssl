<?php
class JConfig {
	public function __construct(){
		$connectstr_dbhost = '';
		  $connectstr_dbname = '';
		  $connectstr_dbusername = '';
		  $connectstr_dbpassword = '';
		  foreach ($_SERVER as $key => $value) {
			  if (strpos($key, "MYSQLCONNSTR_") !== 0) {
				  continue;
			  }
			  
			  $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
			  $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
			  $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
			  $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
		  }
  
		  $this->user = $connectstr_dbusername;
		  $this->host=$connectstr_dbhost;
		  $this->password= $connectstr_dbpassword;
		  $this->db= $connectstr_dbname;
		  
	}
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br />Please check back again soon.';
	public $display_offline_message = '2';
	public $offline_image = '';
	public $sitename = '';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $debug_lang_const = '1';
	public $dbtype = 'mysqli';
	public $db = 'localdb'; 
	public $dbprefix = 'a5nfy_';
	public $live_site = '';
	public $secret = '';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'Europe/Berlin';
	public $mailonline = '1';
	public $mailer = 'smtp';
	public $mailfrom = '';
	public $fromname = '';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '1';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = '';
	public $smtpsecure = 'tls';
	public $smtpport = '587';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	public $log_path = 'D:\\home\\site\\wwwroot\\administrator/logs';
	public $tmp_path = 'D:\\home\\site\\wwwroot/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
	public $shared_session = '0';
	public $memcache_persist = '1';
	public $memcache_compress = '0';
	public $memcache_server_host = 'localhost';
	public $memcache_server_port = '11211';
	public $memcached_persist = '1';
	public $memcached_compress = '0';
	public $memcached_server_host = 'localhost';
	public $memcached_server_port = '11211';
	public $redis_persist = '1';
	public $redis_server_host = 'localhost';
	public $redis_server_port = '6379';
	public $redis_server_auth = '';
	public $redis_server_db = '0';
	public $proxy_enable = '0';
	public $proxy_host = '';
	public $proxy_port = '';
	public $proxy_user = '';
	public $proxy_pass = '';
	public $massmailoff = '0';
	public $replyto = '';
	public $replytoname = '';
	public $MetaRights = '';
	public $sitename_pagetitles = '2';
	public $force_ssl = '0';
	public $session_memcache_server_host = 'localhost';
	public $session_memcache_server_port = '11211';
	public $session_memcached_server_host = 'localhost';
	public $session_memcached_server_port = '11211';
	public $session_redis_persist = '1';
	public $session_redis_server_host = 'localhost';
	public $session_redis_server_port = '6379';
	public $session_redis_server_auth = '';
	public $session_redis_server_db = '0';
	public $frontediting = '1';
	public $cookie_domain = '';
	public $cookie_path = '';
	public $asset_id = '1';
	public $user = 'azure';
}