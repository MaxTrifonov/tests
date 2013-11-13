<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$baseUrl = 'itmozg.ru';

// Подключение файла локальных настроек,
// все изменения для настройки develop окружения задаются 
// в файле local.php
$localConfig = require_once dirname(__FILE__) . '/local.php';

$config = array();

$config['name'] = 'Работа для IT специалистов, вакансии, резюме, работа для программистов, поиск работы - ITMozg';
$config['basePath'] = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..';

$config['behaviors']['edms']['class'] = 'EDMSBehavior';
$config['behaviors']['edms']['connectionId'] = 'mongodb';

// preloading 'log' component
$config['preload'][] = 'log';

// I18n settings
$config['sourceLanguage'] = 'en_us';
$config['language'] = 'ru_ru';

// autoloading model and component classes
$config['import'][] = 'application.models.*';
$config['import'][] = 'application.components.*';
$config['import'][] = 'application.components.widgets.*'; // виджеты
$config['import'][] = 'application.components.util.*'; // утилиты
$config['import'][] = 'application.helpers.*';

$config['import'][] = 'ext.directmongosuite.components.*';
$config['import'][] = 'ext.yiimongodbsuite.*';
$config['import'][] = 'ext.yii-facebook-opengraph.*';
$config['import'][] = 'ext.yii-linkedin.*';
$config['import'][] = 'ext.image.*';
$config['import'][] = 'ext.iCalendar.*';
$config['import'][] = 'ext.acl.*';
$config['import'][] = 'ext.acl.models.*';

$config['import'][] = 'application.modules.resume.models.*';
$config['import'][] = 'application.modules.resume.components.*';

$config['import'][] = 'application.modules.vacancy.models.*';
$config['import'][] = 'application.modules.vacancy.components.*';

$config['import'][] = 'application.modules.company.models.*';
$config['import'][] = 'application.modules.company.components.*';

$config['import'][] = 'application.modules.admin.components.*';
$config['import'][] = 'application.modules.admin.models.*';

$config['import'][] = 'application.modules.mailru.models.*';
$config['import'][] = 'application.modules.mailru.components.*';

$config['import'][] = 'application.modules.appsmafia.models.*';
$config['import'][] = 'application.modules.appsmafia.components.*';

$config['import'][] = 'application.modules.jquery2013.models.*';
$config['import'][] = 'application.modules.jquery2013.components.*';

$config['import'][] = 'application.modules.hpc.models.*';
$config['import'][] = 'application.modules.hpc.components.*';

$config['import'][] = 'application.modules.hpcnew.models.*';
$config['import'][] = 'application.modules.hpcnew.components.*';

$config['import'][] = 'application.modules.hpc2013.models.*';
$config['import'][] = 'application.modules.hpc2013.components.*';

$config['import'][] = 'application.modules.vacancy.models.*';

$config['import'][] = 'application.modules.manager.models.*';

$config['import'][] = 'application.modules.user.models.*';
$config['import'][] = 'application.modules.user.components.*';

$config['import'][] = 'application.modules.online.models.*';
$config['import'][] = 'application.modules.online.components.*';

$config['import'][] = 'application.modules.search.models.*';
$config['import'][] = 'application.modules.search.components.*';

$config['import'][] = 'application.modules.crm.models.*';
$config['import'][] = 'application.modules.crm.components.*';

$config['import'][] = 'application.modules.event.models.*';
$config['import'][] = 'application.modules.event.components.*';

$config['import'][] = 'application.modules.promo.models.*';

$config['import'][] = 'application.modules.app.models.*';
$config['import'][] = 'application.modules.app.components.*';

$config['import'][] = 'application.modules.video.models.*';
$config['import'][] = 'application.modules.events.models.*';
$config['import'][] = 'application.modules.news.models.*';
$config['import'][] = 'application.modules.news.components.*';

$config['import'][] = 'application.modules.services.models.*';

$config['import'][] = 'application.modules.sproject.modules.digitaloctober.models.*';


$config['import'][] = 'application.modules.msstudent.models.*';
$config['import'][] = 'application.modules.msstudent.components.*';


/* extensions for logon via social network */
$config['import'][] = 'ext.lightopenid.*';
$config['import'][] = 'ext.yii-eoauth.*';
$config['import'][] = 'ext.yii-eoauth.lib.*';
$config['import'][] = 'ext.eauth.*';
$config['import'][] = 'ext.eauth.services.*';

// application modules
$config['modules'][] = 'general';
$config['modules'][] = 'resume';
$config['modules'][] = 'vacancy';
$config['modules'][] = 'company';
$config['modules'][] = 'admin';
$config['modules'][] = 'mailru';
$config['modules'][] = 'jquery2013';
$config['modules'][] = 'appsmafia';
$config['modules'][] = 'hpc';
$config['modules'][] = 'hpcnew';
$config['modules'][] = 'hpc2013';
$config['modules'][] = 'user';
$config['modules'][] = 'static';
$config['modules'][] = 'search';
$config['modules'][] = 'online';
$config['modules'][] = 'crm';
$config['modules'][] = 'event';
$config['modules'][] = 'manager';
$config['modules'][] = 'promo';
$config['modules'][] = 'app';
$config['modules'][] = 'video';
$config['modules'][] = 'news';
$config['modules'][] = 'events';
$config['modules'][] = 'services';
$config['modules'][] = 'msstudent';

$config['modules']['mailru']  = array('modules'=>array('admin'));
$config['modules']['jquery2013'] = array('modules'=>array('admin'));
$config['modules']['hpc']     = array('modules'=>array('admin'));
$config['modules']['hpcnew']  = array('modules'=>array('admin'));
$config['modules']['hpc2013']  = array('modules'=>array('admin'));
$config['modules']['event']   = array('modules'=>array('admin'));


// Special projects
$config['modules']['sproject'] = array(
    'modules' => array('digitaloctober'),
);

// Auth Manager
$config['components']['authManager']['class'] = 'EDMSAuthManager';
$config['components']['authManager']['authFile'] = 'authmanager';


// Caching
$config['components']['cache']['class'] = 'EDMSCache';
$config['components']['cache']['collectionName'] = 'cache';
$config['components']['cache']['ensureIndex'] = true;


// Translator
$config['components']['coreMessages']['basePath'] = $config['basePath'] . '/messages';

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

// MySQL db
$config['components']['db']['connectionString'] = 'mysql:host=localhost;dbname=itmozg';
$config['components']['db']['emulatePrepare'] = true;
$config['components']['db']['username'] = 'root';
$config['components']['db']['password'] = 'install';
$config['components']['db']['charset'] = 'utf8';

// MSSQL db
$config['components']['mssql']['class'] = 'CDbConnection';
$config['components']['mssql']['connectionString'] = 'dblib:host=31.28.8.149:14333;dbname=CBaseCRM_Fresh_5x';
$config['components']['mssql']['username'] = 'sa';
$config['components']['mssql']['password'] = 'qwerty11111981';

// OAuth
$config['components']['eauth']['class'] = 'ext.eauth.EAuth';
$config['components']['eauth']['popup'] = false;
$config['components']['eauth']['services']['google']['class'] = 'application.components.oauth.GoogleOAuth';
$config['components']['eauth']['services']['yandex']['class'] = 'application.components.oauth.YandexOAuth';

$config['components']['eauth']['services']['mailru']['class'] = 'application.components.oauth.MailruOAuth';
$config['components']['eauth']['services']['mailru']['client_id'] = '673266';
$config['components']['eauth']['services']['mailru']['client_secret'] = '1ac971f492d65de9a72621367bc5b1a1';

$config['components']['eauth']['services']['facebook']['class']  = 'application.components.oauth.FacebookOAuth';
$config['components']['eauth']['services']['facebook']['client_id'] = '284664774922097';
$config['components']['eauth']['services']['facebook']['client_secret'] = '1c2fb999616a0122d4be9f2fbfe59db1';

//$config['components']['eauth']['services']['vkontakte']['class']         = 'VKontakteOAuthService';
//$config['components']['eauth']['services']['vkontakte']['client_id']     = '2375405';
//$config['components']['eauth']['services']['vkontakte']['client_secret'] = 'klBBzRBfKXWLfxSj9HpU';

//$config['components']['eauth']['services']['linkedin']['class']  = 'application.components.oauth.LinkedinOAuth';
//$config['components']['eauth']['services']['linkedin']['key'] = 'ug955ews6dmu';
//$config['components']['eauth']['services']['linkedin']['secret'] = 'q1sW8x31yCi3HTDs';

//$config['components']['eauth']['services']['twitter']['class']  = 'TwitterOAuthService';
//$config['components']['eauth']['services']['twitter']['key'] = 'w1ekGH9mwRlwgws9HhW5A';
//$config['components']['eauth']['services']['twitter']['secret'] = 'REp6fwicL8In6ni63UlJUoDOhuwDkt4LOUat7IyuU8k';


// use 'site/error' action to display errors
$config['components']['errorHandler']['errorAction'] = 'site/error';

// Facebook
$config['components']['facebook']['class'] = 'ext.yii-facebook-opengraph.SFacebook';
$config['components']['facebook']['appId'] = '284664774922097';
$config['components']['facebook']['secret'] = '1c2fb999616a0122d4be9f2fbfe59db1';


// Google Analytics
$config['components']['gapi']['class'] = 'PGoogleAnalytics';
$config['components']['gapi']['utmac'] = 'UA-17726429-1';
$config['components']['gapi']['utmcs'] = 'UTF-8';
$config['components']['gapi']['utmhn'] = 'http://itmozg.ru';


// config for ImageMagick extension
$config['components']['image']['class']  = 'CImageComponent';
$config['components']['image']['driver'] = 'ImageMagick';

$config['components']['calendar']['class'] = 'iCalendar';

// LinkedIn
$config['components']['linkedin']['class'] = 'ext.yii-linkedin.ELinkedIn';
$config['components']['linkedin']['application_key'] = 'ug955ews6dmu';
$config['components']['linkedin']['application_secret'] = 'q1sW8x31yCi3HTDs';

/* configs for logon via social network */
$config['components']['loid']['class'] = 'ext.lightopenid.loid';



//Internal search log
$config['components']['searchlog']['class'] = 'application.extensions.searchlog.SearchLog';
//...['model'] = 'SearchLogMongo' - for storing logs directly in mongo
//...['model'] = 'SearchLogFilesystem' - for storing logs in filesystem
$config['components']['searchlog']['model'] = 'SearchLogFilesystem';


// Logging
$config['components']['log']['class'] = 'CLogRouter';
//$config['components']['log']['routes'][] = array(
//    'class' => 'EDMSLogRoute',
//    'levels' => 'trace, info, error, warning, edms',
//);
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
// $config['components']['mongodb']['connectionString'] = 'mongodb://localhost:27017,localhost:27018,localhost:27019';
// $config['components']['mongodb']['replicaSet'] = 'itmozg';
$config['components']['mongodb']['dbName'] = 'itmozg';
$config['components']['mongodb']['fsyncFlag'] = true;
$config['components']['mongodb']['safeFlag'] = true;
$config['components']['mongodb']['useCursor'] = false;


// HTML purifier
$config['components']['purifier']['class'] = 'PPurifier';
$config['components']['purifier']['options']['HTML.Allowed'] = 'p,a[href],b,i';


$config['components']['request']['enableCsrfValidation'] = false;


// Search - ElasticSearch
$config['components']['search']['class'] = 'application.modules.search.components.PSearch';
$config['components']['search']['server'] = 'localhost:9200';
$config['components']['search']['protocol'] = 'http';
$config['components']['search']['index'] = 'itmozg';
$config['components']['search']['type'] = 'default';


// Session
$config['components']['session']['class'] = 'EDMSHttpSession';
$config['components']['session']['sessionName'] = 'PHPSESSID';
$config['components']['session']['cookieParams']['domain'] = '.' . $baseUrl;
$config['components']['session']['cookieParams']['lifetime'] = 86400;
$config['components']['session']['collectionName'] = 'session';
$config['components']['session']['connectionId'] = 'mongodb';
$config['components']['session']['dataColumn'] = 'd';
$config['components']['session']['expireColumn'] = 'l';
$config['components']['session']['cookieMode'] = 'only';


/* excel exporter */
$config['components']['excelview']['class'] = 'application.extensions.eexcelview.EExcelView';

/* PDF */
$config['components']['ePdf']['class'] = 'ext.yii-pdf.EYiiPdf';
$config['components']['ePdf']['params']['mpdf']['librarySourcePath'] = 'ext.yii-pdf.MPDF.*';
$config['components']['ePdf']['params']['constants']['_MPDF_TEMP_PATH'] = Yii::getPathOfAlias('application.runtime');

// Routes
$config['components']['urlManager']['urlSuffix'] = '/';
$config['components']['urlManager']['rules']['getSuggest'] = 'helper/getSuggest';
$config['components']['urlManager']['rules']['<name:(amru|devexperts|playrix|mailrugroup|infosec)>'] = 'company/brand/index';
$config['components']['urlManager']['rules']['<name:(fsecure)>'] = 'general/fsecure/index';

$config['components']['urlManager']['rules']['digitaloctober'] = 'sproject/digitaloctober/index/index';
$config['components']['urlManager']['rules']['digitaloctober/admin'] = 'sproject/digitaloctober/admin/index';
$config['components']['urlManager']['rules']['digitaloctober/refresh'] = 'sproject/digitaloctober/index/refresh';

$config['components']['urlManager']['rules']['company/<id:\d+>'] = 'company/index/index';

$config['components']['urlManager']['urlFormat'] = 'path';
$config['components']['urlManager']['urlSuffix'] = '/';
$config['components']['urlManager']['showScriptName'] = false;
$config['components']['urlManager']['caseSensitive'] = false;
#$config['components']['urlManager']['rules'][''] = 'site/index';

$config['components']['urlManager']['rules']['http://' . $baseUrl . '/admin'] = 'admin/index/index';

$config['components']['urlManager']['rules']['resume/form/<action:\w+>'] = 'resume/form/<action>';
$config['components']['urlManager']['rules']['resume/import/<action:\w+>/*'] = 'resume/import/<action>';
$config['components']['urlManager']['rules']['resume/<action:\w+>'] = 'resume/resume/<action>';
$config['components']['urlManager']['rules']['resume'] = 'resume/resume/index';

$config['components']['urlManager']['rules']['auth/<action:\w+>'] = 'general/auth/<action>';

$config['components']['urlManager']['rules']['vacancy/<action:(add|clone|edit)>'] = 'vacancy/vacancy/create';
$config['components']['urlManager']['rules']['vacancy/print'] = 'vacancy/show/print';

$config['components']['urlManager']['rules']['http://<region:([a-z-])+>.' . $baseUrl . '/<city:([a-z-])+>/vacancy/<action:\w+>/<id:\d+>'] = 'vacancy/show/<action>/id/<id>/region/<region>/city/<city>';
$config['components']['urlManager']['rules']['/<city:([a-z-])+>/vacancy/<action:\w+>/<id:\d+>'] = 'vacancy/show/<action>/id/<id>/city/<city>';
$config['components']['urlManager']['rules']['http://<city:([a-z-])+>.' . $baseUrl . '/vacancy/<action:\w+>/<id:\d+>'] = 'vacancy/show/<action>/id/<id>/city/<city>';
$config['components']['urlManager']['rules']['vacancy/show/<id:\d+>'] = 'vacancy/show/show';
$config['components']['urlManager']['rules']['vacancy/branded/<id:\d+>'] = 'vacancy/show/showbranded';
$config['components']['urlManager']['rules']['vacancy'] = 'vacancy/vacancy/index';
$config['components']['urlManager']['rules']['vacancy/<action:\w+>'] = 'vacancy/vacancy/<action>';

$config['components']['urlManager']['rules']['vacancy/<action:\w+>/<id:\d+>'] = 'vacancy/vacancy/<action>/id/<id>';

$config['components']['urlManager']['rules']['mailru'] = 'mailru/mailru/index';
$config['components']['urlManager']['rules']['mailru/<action:\w+>'] = 'mailru/mailru/<action>';

$config['components']['urlManager']['rules']['high-performance-conference'] = 'hpc/index/index';
$config['components']['urlManager']['rules']['high-performance-conference/<action:\w+>'] = 'hpc/index/<action>';

$config['components']['urlManager']['rules']['high-performance-conference/admin/<action:\w+>'] = 'hpc/admin/admin/<action>';
$config['components']['urlManager']['rules']['high-performance-conference/admin/<action:\w+>/<id:\w+>'] = 'hpc/admin/admin/<action>/id/<id>';


//AppsMafia
$config['components']['urlManager']['rules']['http://appsmafia.' . $baseUrl . '/'] = 'appsmafia/index/index';
$config['components']['urlManager']['rules']['http://appsmafia.' . $baseUrl . '/<action:\w+>'] = 'appsmafia/index/<action>';

//HPC 2013
$config['components']['urlManager']['rules']['http://hpc4.' . $baseUrl . '/online'] = 'hpc2013/online/index';
$config['components']['urlManager']['rules']['http://hpc4.' . $baseUrl . '/online/<action:\w+>'] = 'hpc2013/online/<action>';

$config['components']['urlManager']['rules']['http://hpc4.' . $baseUrl] = 'hpc2013/index/index';
$config['components']['urlManager']['rules']['http://hpc4.' . $baseUrl . '/<action:\w+>'] = 'hpc2013/index/<action>';
$config['components']['urlManager']['rules']['http://hpc4.' . $baseUrl . '/admin/<action:\w+>'] = 'hpc2013/admin/admin/<action>';


//Microsoft

$config['components']['urlManager']['rules']['http://msstudent.' . $baseUrl] = 'msstudent/index';
$config['components']['urlManager']['rules']['http://msstudent.' . $baseUrl . '/<action:\w+>'] = 'msstudent/index/<action>';

$config['components']['urlManager']['rules']['msstudent'] = 'msstudent/index/index';

// jQuery 2013
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl] = 'jquery2013/index/index';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/auth/<action:\w+>'] = 'jquery2013/auth/<action>';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/<action:\w+>'] = 'jquery2013/index/<action>';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/online/Ooops...'] = 'jquery2013/index/online/';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/online/section/<section:\d+>'] = 'jquery2013/index/online';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/online/section/<section:\d+>/<lang:([a-z-])+>'] = 'jquery2013/index/online';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/jquery2013/download'] = 'jquery2013/index/download';

$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/admin/jquery2013/<action:\w+>'] = 'jquery2013/admin/check/<action>';
$config['components']['urlManager']['rules']['http://jquery.' . $baseUrl . '/admin/jquery2013/sendInvitation/<id:([a-z-0-9])+>'] = 'jquery2013/admin/check/sendInvitation/';

$config['components']['urlManager']['rules']['jquery2013'] = 'jquery2013/index/index';
$config['components']['urlManager']['rules']['jquery2013/<action:\w+>'] = 'jquery2013/index/<action>';


$config['components']['urlManager']['rules']['mailru/admin/<action:\w+>'] = 'mailru/admin/admin/<action>';
$config['components']['urlManager']['rules']['mailru/admin/<action:\w+>/<id:\w+>'] = 'mailru/admin/admin/<action>/id/<id>';


$config['components']['urlManager']['rules']['http://hpc.' . $baseUrl ] = 'hpcnew/index/index';
$config['components']['urlManager']['rules']['http://hpc.' . $baseUrl . '/<action:\w+>'] = 'hpcnew/index/<action>';

$config['components']['urlManager']['rules']['uxonline'] = 'online/ux/index';
$config['components']['urlManager']['rules']['uxmasterclass2012'] = 'online/ux/view';
$config['components']['urlManager']['rules']['uxmasterclass'] = 'online/ux/buy';
$config['components']['urlManager']['rules']['uxonline/manage'] = 'online/ux/manage';
$config['components']['urlManager']['rules']['uxonline/test'] = 'online/ux/test';
$config['components']['urlManager']['rules']['uxonline/login'] = 'online/ux/login';

$config['components']['urlManager']['rules']['wowzapp2012'] = 'online/online/wowzapp';

$config['components']['urlManager']['rules']['press'] = 'online/online/press';
$config['components']['urlManager']['rules']['uxsreda']     = 'online/online/uxsreda';
$config['components']['urlManager']['rules']['online'] = 'online/online/index';
$config['components']['urlManager']['rules']['dribbblemeetupru'] = 'online/online/dribbble';


$config['components']['urlManager']['rules']['admin/resume/<action:\w+>/<id:\w+>'] = 'admin/resume/<action>/id/<id>';

$config['components']['urlManager']['rules']['http://<region:([a-z-])+>.'.$baseUrl.'/vakansii/<slug>/<child_slug>'] = 'search/index/catalog';
$config['components']['urlManager']['rules']['http://<region:([a-z-])+>.'.$baseUrl.'/vakansii/<slug>'] = 'search/index/catalog';
$config['components']['urlManager']['rules']['http://<region:([a-z-])+>.'.$baseUrl.'/vakansii'] = 'search/index/catalog';

$config['components']['urlManager']['rules']['vakansii/<slug>/<child_slug>'] = 'search/index/catalog';
$config['components']['urlManager']['rules']['vakansii/<slug>'] = 'search/index/catalog';
$config['components']['urlManager']['rules']['vakansii'] = 'search/index/catalog';

$config['components']['urlManager']['rules']['search/vacancy'] = 'search/search/vacancy';
$config['components']['urlManager']['rules']['search/resume'] = 'search/search/resume';
$config['components']['urlManager']['rules']['search/company'] = 'search/search/company';
$config['components']['urlManager']['rules']['search/<action:\w+>'] = 'search/index/<action>';

# список мероприятий
$config['components']['urlManager']['rules']['event'] = 'event/index/index';
$config['components']['urlManager']['rules']['event/category/<category:\w+>'] = 'event/index/index';

# список прошедших мероприятий
$config['components']['urlManager']['rules']['event/last']   = 'event/index/last';
$config['components']['urlManager']['rules']['event/last/category/<category:\w+>'] = 'event/index/last';

# регистрация на мероприятия
$config['components']['urlManager']['rules']['event/getRegisterForm/<id:\w+>'] = 'event/index/getRegisterForm';
$config['components']['urlManager']['rules']['event/registerToEvent'] = 'event/index/registerToEvent';

# просмотр мероприятия, его фотообзора, получение ics - файла, покупка посещения
$config['components']['urlManager']['rules']['event/<slug>'] = 'event/index/show';
$config['components']['urlManager']['rules']['event/<slug>/<action>'] = 'event/index/<action>';

$config['components']['urlManager']['rules']['admin/event'] = 'event/admin/event/index';
$config['components']['urlManager']['rules']['admin/event/<controller:\w+>/<action:\w+>/<id:\w+>/<idx:\w+>'] = 'event/admin/<controller>/<action>/id/<id>/idx/<idx>';
$config['components']['urlManager']['rules']['admin/event/<controller:\w+>/<action:\w+>/<id:\w+>'] = 'event/admin/<controller>/<action>/id/<id>';
$config['components']['urlManager']['rules']['admin/event/<controller:\w+>/<action:\w+>'] = 'event/admin/<controller>/<action>';
$config['components']['urlManager']['rules']['admin/event/<controller:\w+>'] = 'event/admin/<controller>/index';

/**
 * TODO
 * rule for selecting event in admin/event/users
 */
$config['components']['urlManager']['rules']['admin/event/<action:\w+>/event/<event:\w+>'] = 'event/admin/admin/<action>/event/<event>';

// промо-акции
$config['components']['urlManager']['rules']['promo2013'] = 'promo/employer/index';

$config['components']['urlManager']['rules']['iphone-za-resume']          = 'promo/jobseeker/index';
$config['components']['urlManager']['rules']['iphone-za-resume/register'] = 'promo/jobseeker/register';

$config['components']['urlManager']['rules']['poiski-sokrovish'] = 'promo/summer/index';

$config['components']['urlManager']['rules']['application'] = 'app/index/index';
$config['components']['urlManager']['rules']['application/approve/<id:\w+>'] = 'app/index/feedback/id/<id>/status/approve';
$config['components']['urlManager']['rules']['application/reject/<id:\w+>'] = 'app/index/feedback/id/<id>/status/reject';
$config['components']['urlManager']['rules']['application/oneclick/<id:\w+>'] = 'app/index/feedback/id/<id>/status/oneclick';
$config['components']['urlManager']['rules']['application/<action:\w+>'] = 'app/index/<action>';
$config['components']['urlManager']['rules']['application/<action:\w+>/<id:\w+>'] = 'app/index/<action>/id/<id>';

// Новостной блок
# rss вакансий
$config['components']['urlManager']['rules']['job_rss/<filename:\w+\.xml>'] = 'vacancy/vacancy/rss';

$config['components']['urlManager']['rules']['news']                 = 'news/index/index/<id>';
$config['components']['urlManager']['rules']['news/page/<page:\d+>'] = 'news/index/index/page/<page>';
$config['components']['urlManager']['rules']['news/<id:\d+>']        = 'news/index/show/id/<id>';

$config['components']['urlManager']['rules']['events']                 = 'events/index/index/<id>';
$config['components']['urlManager']['rules']['events/page/<page:\d+>'] = 'events/index/index/page/<page>';

$config['components']['urlManager']['rules']['events']               = 'events/index/index';
$config['components']['urlManager']['rules']['events/archive']       = 'events/index/archive';
$config['components']['urlManager']['rules']['events/<id:\d+>']      = 'events/index/show';


$config['components']['urlManager']['rules']['user/profile/messages']        = 'user/messages/inbox';
$config['components']['urlManager']['rules']['user/profile/messages/<action:\w+>']        = 'user/messages/<action>';


$config['components']['urlManager']['rules']['videos'] = 'video/index/index';
$config['components']['urlManager']['rules']['videos/<page:\d+>'] = 'video/index/index';

$config['components']['urlManager']['rules']['contact'] = 'site/contact';
$config['components']['urlManager']['rules']['contacts'] = 'static/static/contacts';

$config['components']['urlManager']['rules']['poleznoe'] = 'static/static/useful';
$config['components']['urlManager']['rules']['poleznoe/karta'] = 'static/static/map';

$config['components']['urlManager']['rules']['static/<action:\w+>'] = 'static/static/<action>';


$config['components']['urlManager']['rules']['<module:\w+>/<controller:\w+>/<action:\w+>'] = '<module>/<controller>/<action>';
$config['components']['urlManager']['rules']['<controller:\w+>/<action:\w+>'] = '<controller>/<action>';

// User auth
$config['components']['user']['class'] = 'PWebUser';
$config['components']['user']['allowAutoLogin'] = true;
$config['components']['user']['autoRenewCookie'] = true;
$config['components']['user']['identityCookie']['domain'] = '.' . $baseUrl;
$config['components']['user']['authTimeout'] = 86400;


// Yandex Metrika
$config['components']['yaCounter']['class'] = 'PYandexMetrika';
$config['components']['yaCounter']['counterName'] = 'yaCounter14887297';


// application-level parameters that can be accessed
// using Yii::app()->params['paramName']

$config['params']['admin_email']  = 'd.pavluchkov@itmozg.ru';
$config['params']['market_email'] = 'o.kotilevskaya@itmozg.ru';

$config['params']['email'] = 'no-reply@ITmozg.ru';
$config['params']['email_name'] = 'ITmozg.ru';

$config['params']['daxtra_server'] = 'http://77.221.141.82/cvvalid/CVXtractorService.wsdl';
$config['params']['daxtra_account'] = 'ITMozg';

// ключ yandex maps API
$config['params']['ymaps_key'] = 'AH2Yo1ABAAAASQDuPQIA4R9l5u09UhigCTnqqQtJsf38QnEAAAAAAAAAAADcROvyDynmIIq76kD2IiVzRwwnmg==';

// Robokassa payment system
$config['params']['robo_login']     = 'digitalspb';
$config['params']['robo_password']  = 'vasya!(@';
$config['params']['robo_password1'] = 'qwerty!(@';
$config['params']['robo_url']       = 'https://merchant.roboxchange.com/Index.aspx';
$config['params']['robo_api_url']   = "https://merchant.roboxchange.com/WebService/Service.asmx/GetCurrencies?MerchantLogin=" . $config['params']['robo_login'];

$config['params']['site_url'] = 'http://itmozg.ru';
$config['params']['site_domain'] = 'itmozg.ru';
$config['params']['cookie_domain'] = '.itmozg.ru';

$config['params']['cityless_regions'][] = 'msk';
$config['params']['cityless_regions'][] = 'spb';

$config['params']['vk']['appId'] = '2375405';

// google analytics
$config['params']['google_account'] = 'UA-17726429-1';
$config['params']['is_production'] = true;
//Versions files
$config['params']['version'] = 'road-warrior';

$config['components']['urlManager']['rules']['http://beta.' . $baseUrl] = 'general/landing/jobseeker';
$config['components']['urlManager']['rules']['http://beta.' . $baseUrl . '/employer'] = 'general/landing/employer';

$bitbyteConfig = require_once dirname(__FILE__) . '/bitbyte.php';

return CMap::mergeArray( $bitbyteConfig, $config, $localConfig);
