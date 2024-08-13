<?php

namespace Esoftdream\Response\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogResponse extends Migration
{
    public function up()
    {
        // response api
        $this->forge->addField([
            '`log_response_api_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT',
            '`log_response_api_type` varchar(100) NOT NULL',
            '`log_response_api_curl` mediumtext',
            '`log_response_api_endpoint` mediumtext',
            '`log_response_api_header` mediumtext CHARACTER SET utf8mb4',
            '`log_response_api_param` mediumtext',
            '`log_response_api_http_method` mediumtext',
            '`log_response_api_http_code` mediumtext',
            '`log_response_api_result` mediumtext',
            '`log_response_api_db_table` mediumtext',
            '`log_response_api_db_table_field` mediumtext',
            '`log_response_api_db_table_field_value` mediumtext',
            '`log_response_api_db_trans` varchar(250) DEFAULT NULL',
            '`log_response_api_script_path` mediumtext',
            '`log_response_api_script_fetch_class` mediumtext',
            '`log_response_api_script_fetch_method` mediumtext',
            '`log_response_api_script_line` mediumtext',
            '`log_response_api_datetime` datetime DEFAULT NULL',
            '`log_response_api_resend_response_api_id` bigint UNSIGNED DEFAULT NULL',
        ]);
        $this->forge->addPrimaryKey('log_response_api_id');
        $this->forge->createTable('log_response_api');

        // response callback
        $this->forge->addField([
            '`log_response_callback_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT',
            '`log_response_callback_type` varchar(100) NOT NULL',
            '`log_response_callback_header` text NOT NULL',
            '`log_response_callback_param` text',
            '`log_response_callback_http_method` mediumtext NOT NULL',
            '`log_response_callback_http_code` mediumtext NOT NULL',
            '`log_response_callback_result` text',
            '`log_response_callback_datetime` datetime DEFAULT NULL',
        ]);
        $this->forge->addPrimaryKey('log_response_callback_id');
        $this->forge->createTable('log_response_callback');
    }

    public function down()
    {
        $this->forge->dropTable('log_response_api', true);
        $this->forge->dropTable('log_response_callback', true);
    }
}
