<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$baseUrl = 'tests.local';


$config = array();

$config['basePath'] = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..';

// autoloading model and component classes
$config['import'][] = 'application.models.*';
$config['import'][] = 'application.components.*';
$config['import'][] = 'application.components.widgets.*'; // виджеты

$config['import'][] = 'ext.yiimongodbsuite.*';

// Caching
$config['components']['cache']['class'] = 'EDMSCache';
$config['components']['cache']['collectionName'] = 'cache';
$config['components']['cache']['ensureIndex'] = true;

// Override client-script to add version control there
$config['components']['clientScript']['class'] = 'BClientScript';

/*Client Script Libraries */
$config['components']['clientScript']['packages']['form'] = array(
    'baseUrl' => 'resources/lib/form',
    'js' => array('jquery.form.min.js'),
    'depends' => array('jquery')
);

$config['components']['clientScript']['packages']['font-waesome'] = array(
    'baseUrl' => 'resources/lib/font-awesome',
    'css' => array('css/font-awesome.min.css'),
);

$config['components']['clientScript']['packages']['jcrop'] = array(
    'baseUrl' => 'resources/lib/jcrop',
    'css' => array('jquery.Jcrop.min.css'),
    'js' => array('jquery.Jcrop.min.js'),
    'depends' => array('form')
);

$config['components']['clientScript']['packages']['ace'] = array(
    'baseUrl' => 'resources/lib/ace',
    'js' => array('ace.js', 'ext-emmet.js')
);

$config['components']['clientScript']['packages']['animate'] = array(
    'baseUrl' => 'resources/lib/animate',
    'css' => array('animate-custom.css')
);

//Client Script Packages
$config['components']['clientScript']['packages']['opensans'] = array(
    'baseUrl' => 'http://',
    'css' => array('/fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin,cyrillic')
);
$config['components']['clientScript']['packages']['ptsans'] = array(
    'baseUrl' => 'http://',
    'css' => array('/fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic')
);
$config['components']['clientScript']['packages']['ptcaption'] = array(
    'baseUrl' => 'http://',
    'css' => array('/fonts.googleapis.com/css?family=PT+Sans+Caption&subset=latin,cyrillic')
);

$config['components']['clientScript']['packages']['base'] = array(
    'baseUrl' => 'resources',
    'css' => array('css/base.css'),
    'js' => array('js/base.js'),
    'depends' => array('jquery')
);

$config['components']['clientScript']['packages']['ui'] = array(
    'baseUrl' => 'resources',
    'css' => array('css/ui.css'),
    'js' => array('js/ui.js'),
    'depends' => array('jquery.ui', 'font-waesome')
);

$config['components']['clientScript']['packages']['template'] = array(
    'baseUrl' => 'resources/css',
    'css' => array('template.css'),
    'depends' => array('base', 'ptsans', 'ptcaption', 'ui', 'animate')
);

$config['components']['clientScript']['packages']['general'] = array(
    'baseUrl' => 'resources/css',
    'css' => array('style.css'),
    'depends' => array('template')
);

/*Client Script Libraries */
$config['components']['clientScript']['packages']['form'] = array(
    'baseUrl' => 'resources/lib/form',
    'js' => array('jquery.form.min.js'),
    'depends' => array('jquery')
);

$config['components']['clientScript']['packages']['jcrop'] = array(
    'baseUrl' => 'resources/lib/jcrop',
    'css' => array('jquery.Jcrop.min.css'),
    'js' => array('jquery.Jcrop.min.js'),
    'depends' => array('form')
);

$config['components']['clientScript']['packages']['ace'] = array(
    'baseUrl' => 'resources/lib/ace',
    'js' => array('ace.js', 'ext-emmet.js')
);

// Logging
$config['components']['log']['class'] = 'CLogRouter';

$config['components']['log']['routes'][] = array(
    'class' => 'CFileLogRoute',
    'levels' => 'error, warning',
);
$config['components']['log']['routes'][] = array(
    'class' => 'application.components.EMailLogger',
    'levels' => 'error, warning',
    'emails' => 'daniil@itmozg.ru',
    'subject' => '[Error] - Achtung! Yii error!',
    'sentFrom' => 'no-reply@itmozg.ru',
);
$config['components']['log']['routes'][] = array(
    'class' => 'application.extensions.yii-sentry-log.RSentryLog',
    'dsn' => 'http://7ce57bb98ac14fc990e4758a14b581a0:45cbbc885e884eb1b3012f3fc423ebe0@redjob.ru:9000/2',
    'levels' => 'error, warning',
);


// Mail
$config['components']['mail']['class'] = 'application.extensions.mailer.EMailer';


// Mongo db config
$config['components']['mongodb']['class'] = 'EMongoDB';
$config['components']['mongodb']['connectionString'] = 'mongodb://localhost';
$config['components']['mongodb']['dbName'] = 'skilltest';
$config['components']['mongodb']['fsyncFlag'] = true;
$config['components']['mongodb']['safeFlag'] = true;
$config['components']['mongodb']['useCursor'] = false;


// HTML purifier
$config['components']['purifier']['class'] = 'PPurifier';
$config['components']['purifier']['options']['HTML.Allowed'] = 'p,a[href],b,i';


$config['components']['request']['enableCsrfValidation'] = false;

// Routes
$config['components']['urlManager']['urlFormat'] = 'path';
$config['components']['urlManager']['urlSuffix'] = '/';
$config['components']['urlManager']['showScriptName'] = false;
$config['components']['urlManager']['caseSensitive'] = false;

// User auth
$config['components']['user']['class'] = 'CWebUser';
$config['components']['user']['allowAutoLogin'] = true;
$config['components']['user']['autoRenewCookie'] = true;
$config['components']['user']['identityCookie']['domain'] = '.' . $baseUrl;
$config['components']['user']['authTimeout'] = 86400;

$config['params']['admin_email']  = 'mtrifonov@bk.ru';
$config['params']['market_email'] = 'mtrifonov@bk.ru';

$config['params']['email'] = 'mtrifonov@bk.ru';
$config['params']['email_name'] = 'skilltest.ru';

$config['params']['site_url'] = 'http://'.$baseUrl;
$config['params']['site_domain'] = $baseUrl;
$config['params']['cookie_domain'] = '.'.$baseUrl;

return $config;