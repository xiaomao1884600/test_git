<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/25
 * Time: 下午6:31
 */

namespace App\Services\Elastic\Mappings;


class RequestLogs
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
        'request_params' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'request_url' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'request_date' => [ // 录音ID
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'request_headers' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'request_method' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'response_params' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'response_date' => [ // 录音ID
            'type' => 'date',
            'index' => 'not_analyzed',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
    ];
}