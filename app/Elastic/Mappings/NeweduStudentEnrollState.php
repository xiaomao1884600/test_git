<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/3/2
 * Time: 下午3:03
 */

namespace App\Services\Elastic\Mappings;


class NeweduStudentEnrollState
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
        'student_enroll_state_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'student_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'enrollment_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'new_enrollment_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'money' => [
            'type' => 'float',
            'index' => 'not_analyzed',
        ],
        'status' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'reason' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'user_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'dateline' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'exec_date' => [
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'old_enrollment_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'old_clazz_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'old_clazz_campus_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'new_clazz_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'new_clazz_campus_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],

    ];
}