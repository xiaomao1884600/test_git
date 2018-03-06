<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/26
 * Time: 上午11:18
 */

namespace App\Services\Elastic\Mappings;


class EtlRecordDayUserSummary
{
    public $_all = [
        'analyzer' => 'ik_max_word',
    ];

    public $_source = [
        'enabled' => true
    ];

    /**
     * 字段配置
     *
     * @var array
     */
    public $properties = [
        'campus_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'datetime' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'user_mobile' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'student_mobile' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'calls_total' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'billable_total' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'calltype' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'avg_billable' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'valid' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'studentid' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'studentname' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'userid' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'username' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'valid_calls_total' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'valid_billable_total' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'valid_avg_billable' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'unique_key' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'created_at' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'updated_at' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'team_num' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'record_campus_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
    ];
}