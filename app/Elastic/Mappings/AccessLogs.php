<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/2/22
 * Time: 上午10:51
 */

namespace App\Services\Elastic\Mappings;


class AccessLogs
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
            'fielddata' => true,
        ],
        'user_id' => [ // 录音ID
            'type' => 'text',
            'index' => 'not_analyzed',
            'fielddata' => true,
        ],
        'user_name' => [ // 录音ID
            'type' => 'text',
            'fielddata' => true,
        ],
        'created_at' => [ // 录音ID
            'type' => 'date',
            'format' => 'yyyy-MM-dd HH:mm:ss',
        ],
    ];
}