<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2013/12/25 01:16:43
sfConfig::add(array(
  'sf_error_404_module' => 'errores',
  'sf_error_404_action' => 'index',
  'sf_login_module' => 'sfGuardAuth',
  'sf_login_action' => 'signin',
  'sf_secure_module' => 'sfGuardAuth',
  'sf_secure_action' => 'secure',
  'sf_module_disabled_module' => 'default',
  'sf_module_disabled_action' => 'disabled',
  'sf_error_500_module' => 'errores',
  'sf_error_500_action' => 'errorinternalserver',
  'sf_error_403_module' => 'errores',
  'sf_error_403_action' => 'error403',
  'sf_error_401_module' => 'errores',
  'sf_error_401_action' => 'error401',
  'sf_use_database' => true,
  'sf_i18n' => true,
  'sf_compressed' => false,
  'sf_check_lock' => false,
  'sf_csrf_secret' => 'UniqueSecret',
  'sf_escaping_strategy' => true,
  'sf_escaping_method' => 'ESC_SPECIALCHARS',
  'sf_no_script_name' => false,
  'sf_cache' => false,
  'sf_etag' => false,
  'sf_web_debug' => true,
  'sf_error_reporting' => 32767,
  'sf_file_link_format' => NULL,
  'sf_admin_web_dir' => '/sf/sf_admin',
  'sf_web_debug_web_dir' => '/sf/sf_web_debug',
  'sf_standard_helpers' => array (
  0 => 'Partial',
  1 => 'Cache',
),
  'sf_enabled_modules' => array (
  0 => 'default',
  1 => 'sfGuardAuth',
  2 => 'sfGuardForgotPassword',
  3 => 'sfGuardRegister',
),
  'sf_charset' => 'utf-8',
  'sf_logging_enabled' => true,
  'sf_default_culture' => 'es_EC',
));