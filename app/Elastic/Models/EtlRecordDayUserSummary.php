<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/26
 * Time: 上午11:15
 */

namespace App\Services\Elastic\Models;

use App\Services\Elastic\Foundation\Base\Model;

class EtlRecordDayUserSummary extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'etl_record_day_user_summary';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'summary';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'EtlRecordDayUserSummary';
}