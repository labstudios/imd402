<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-16 19:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL examples/imd402/kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2011-11-16 19:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/test/46/yup ~ SYSPATH/classes/kohana/request.php [ 760 ]
2011-11-16 20:00:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/test.php [ 8 ]
2011-11-16 20:39:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/welcome.php [ 8 ]
2011-11-16 20:39:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/welcome.php [ 8 ]
2011-11-16 20:40:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: ajaxCall ~ APPPATH/classes/controller/master.php [ 22 ]
2011-11-16 21:17:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/kohana/orm.php [ 109 ]
2011-11-16 21:43:01 --- ERROR: Kohana_Exception [ 0 ]: The _roles property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 682 ]
2011-11-16 21:43:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users_has_roles._role_id' in 'on clause' [ SELECT `roles`.* FROM `roles` JOIN `users_has_roles` ON (`users_has_roles`.`_role_id` = `roles`.`id`) WHERE `users_has_roles`.`user_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2011-11-16 22:01:23 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2011-11-16 22:03:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2011-11-16 22:04:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2011-11-16 22:04:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1233 ]
2011-11-16 22:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2011-11-16 22:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]
2011-11-16 22:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 94 ]