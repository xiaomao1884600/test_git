<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/3/6
 * Time: 下午2:46
 */

namespace App\Services\Elastic\Mappings;


class Tests
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
        'attendance_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'student_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'clazz_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'attendance_date' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd',
        ],
        'time_range' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'sign_in' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'sign_out' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'date_line' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'replaced' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'score' => [
            'type' => 'float',
            'index' => 'not_analyzed',
        ],
    ];
}