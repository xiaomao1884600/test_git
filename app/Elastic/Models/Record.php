<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/18
 * Time: 下午5:19
 */

namespace App\Services\Elastic\Models;


use App\Services\Elastic\Foundation\Base\Model;

class Record extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = '';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'analyze';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'record';

    /**
     * Elastic 索引别名
     *
     * @var string
     */
    protected $alias = 'record_alias';
    //protected $alias = 'record_alias_heat';
}