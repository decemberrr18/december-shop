<?php return array (
  'debug' => false,
  'url' => 'http://localhost/',
  'timezone' => 'UTC',
  'locale' => 'vi_VN',
  'fallback_locale' => 'en',
  'key' => 'base64:eFk4d2JCNUozcHo5aHBSYkdabkV3OEZ4ZlhKSHdTNnY=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);