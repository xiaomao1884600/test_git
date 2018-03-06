<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 下午3:27
 */

namespace App\Services\Elastic\Mappings;


class Record
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
        'record_id' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'campus_id' => [ // 校区ID
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'user_campus_id' => [ // 用户校区
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'record_campus_id' => [ // 录音发生校区
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'student_campus_id' => [ // 学生校区
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'team_num' => [ // 团队编号
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'user_mobile' => [ // 员工电话
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'userid' => [ // 员工ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'username' => [ // 员工姓名
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'student_mobile' => [ // 学生电话
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'studentid' => [ // 学生ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'studentname' => [ // 学生姓名
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'duration' => [ // 电话时长
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'billable' => [ // 通话时长
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'calltype' => [ // 通话类型 1=呼入，2=呼出
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'constant_type' => [ // 电话型 1=招生顾问
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'is_enrolled' => [ // 是否报名
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'datetime' => [ // 录音时间
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'datetime_hour' => [ // 录音时间
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'HH:mm:ss',
        ],
        'oss_path' => [ // oss路径
            'type' => 'text',
            'index' => 'not_analyzed'
        ],
        'analyze_info' => [ // 录音识别信息
            'type' => 'nested', // 嵌套对像类型
            'properties' => [
                'begin_time' => [ // 开始时间
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'channel_id' => [ // 通道ID
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'emotion_value' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'end_time' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'silence_duration' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'speech_rate' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'text' => [
                    'type' => 'text',
                    'include_in_all' => true,
                    'analyzer' => 'ik_max_word',
                    'fielddata' => true,
                ],
            ],
        ],
        'channel_id_num' => [ // 通道ID数量
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'user_channel_id' => [ // 用户对话转写通道ID
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'asr_rate' => [ // 录音转文字识别率
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'channel_rate' => [ // 录音通道识别率
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'tagging' => [
            'type' => 'nested', // 嵌套对像类型
            'properties' => [
                'userid' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                    'null_value' => 0,
                ],
                'username' => [
                    'type' => 'text',
                    'index' => 'not_analyzed',
                    'fielddata' => true,
                ],
                'label' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'remark' => [
                    'type' => 'text',
                    'include_in_all' => true,
                    'analyzer' => 'ik_max_word',
                    'fielddata' => true,
                ],
                'create_at' => [
                    'type' => 'date',
                    'format' => 'yyyy-MM-dd HH:mm:ss',
                    'index' => 'not_analyzed',
                ],
            ],
        ],
        'create_at' => [ // 记录添加时间
            'type' => 'date',
            'format' => 'yyyy-MM-dd HH:mm:ss',
            'index' => 'not_analyzed',
        ],
        'tencent_record' => [ // 是否腾讯识别
            'type' => 'integer',
            'index' => 'not_analyzed',
        ],
        'tencent_record_info' => [ // 腾讯识别结果
            'type' => 'nested', // 嵌套对像类型
            'properties' => [
                'begin_time' => [ // 开始时间
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'channel_id' => [ // 通道ID
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'emotion_value' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'end_time' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'silence_duration' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'speech_rate' => [
                    'type' => 'integer',
                    'index' => 'not_analyzed',
                ],
                'text' => [
                    'type' => 'text',
                    'include_in_all' => true,
                    'analyzer' => 'ik_max_word',
                    'fielddata' => true,
                ],
            ],
        ],
    ];

}