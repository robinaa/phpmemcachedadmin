<?php
return array (
  'stats_api' => 'Server',
  'slabs_api' => 'Server',
  'items_api' => 'Server',
  'get_api' => 'Server',
  'set_api' => 'Server',
  'delete_api' => 'Server',
  'flush_all_api' => 'Server',
  'connection_timeout' => '1',
  'max_item_dump' => '100',
  'refresh_rate' => 2,
  'memory_alert' => '80',
  'hit_rate_alert' => '90',
  'eviction_alert' => '0',
  'file_path' => 'Temp/',
  'servers' => 
  array (
    'Default' => 
    array (
      'memcached_dev' => 
      array (
        'hostname' => 'ec2-uw2a-d-bmo-all-jumpbox.galepartners.com',
        'port' => '11212',
      ),
      'memcached_qa' => 
      array (
        'hostname' => 'ec2-uw2a-d-bmo-all-jumpbox.galepartners.com',
        'port' => '11213',
      ),
      'memcached_uat' => 
      array (
        'hostname' => 'ec2-uw2a-d-bmo-all-jumpbox.galepartners.com',
        'port' => '11214',
      ),
    ),
  ),
);
