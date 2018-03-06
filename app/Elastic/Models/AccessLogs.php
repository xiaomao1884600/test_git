<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/2/22
 * Time: 上午10:49
 */

namespace App\Services\Elastic\Models;

use App\Services\Elastic\Foundation\Base\Model;

class AccessLogs extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'record_access_logs';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'access_logs';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'accessLogs';
}