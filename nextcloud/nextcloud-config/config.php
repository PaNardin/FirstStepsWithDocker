<?php
$CONFIG = array (
  'datadirectory' => '/data',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/nextcloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/apps2',
      'url' => '/apps2',
      'writable' => true,
    ),
  ),
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '/tmp/redis.sock',
    'port' => 0,
    'timeout' => 0.0,
  ),
  'instanceid' => 'ocadc83b19e7',
  'passwordsalt' => 'EYCWg8fy3M1N+mROkmnYHSPB13rAH8',
  'secret' => '4GGydfMlkB3RcXIjW9MtuwHTFguJWZpkAByRfBoiybYgNGTe',
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'overwrite.cli.url' => 'http://localhost',
  'dbtype' => 'mysql',
  'version' => '11.0.1.2',
  'dbname' => 'XXXX',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mail_from_address' => 'administrator',
  'logtimezone' => 'Europe/Berlin',
  'logdateformat' => 'Y-m-d H:i:s',
);