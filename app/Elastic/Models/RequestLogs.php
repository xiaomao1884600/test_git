<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/25
 * Time: 下午6:28
 */

namespace App\Services\Elastic\Models;

use App\Services\Elastic\Foundation\Base\Model;

class RequestLogs extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'record_request_logs';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'request_logs';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'requestLogs';
}