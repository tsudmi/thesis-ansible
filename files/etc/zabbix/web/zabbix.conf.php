<?php
// {{ ansible_managed }}
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{{ zabbix_db_host }}';
$DB['PORT']     = '0';
$DB['DATABASE'] = '{{ zabbix_db_name }}';
$DB['USER']     = '{{ zabbix_db_username }}';
$DB['PASSWORD'] = '{{ zabbix_db_password }}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'localhost';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = 'Zabbix';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
