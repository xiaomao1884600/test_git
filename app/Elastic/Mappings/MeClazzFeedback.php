<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/2/28
 * Time: 下午2:02
 */

namespace App\Services\Elastic\Mappings;


class MeClazzFeedback
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
        'class_feedback_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'campus_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'specialty_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'course_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'teacher_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'student_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'faculty_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'term_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'clazz_id' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'clazz_course_day' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'class_feedback' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'teacher_feedback' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'coach_feeling' => [
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'feedback_date' => [
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
    ];
}