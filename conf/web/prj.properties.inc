<?php
/**
 * ここにプロジェクト共通の定数を記述してください
 * 
 * @version   2015/02/19 -
 * @author    -
 * @since     2015/02/19
 * @copyright (C)2015 CROOZ All Rights Reserved
 */
switch (APPLICATION_LEVEL) {
	case 'LOCAL':
		define('APP_SITE_DOMAIN', 'test.vmlocal.crooz.local');
		define('IMAGE_HOST', 'test.vmlocal.crooz.local');
		break;
	case 'DEV':
		define('APP_SITE_DOMAIN', 'dev4.test.crooz.local');
		define('IMAGE_HOST', 'dev4.test.vmlocal.crooz.local');
		break;
	case 'PRE':
		define('APP_SITE_DOMAIN', 'pre4.test.crooz.local');
		define('IMAGE_HOST', 'pre4.test.vmlocal.crooz.local');
		break;
	default:
		define('APP_SITE_DOMAIN', 'test.crooz.local');
		define('IMAGE_HOST', 'test.vmlocal.crooz.local');
		break;
}
