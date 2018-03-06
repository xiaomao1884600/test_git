<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/2/28
 * Time: 下午1:57
 */

namespace App\Services\Elastic\Models;


use App\Services\Elastic\Foundation\Base\Model;

class MeClazzFeedback extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'me';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'clazz_feedback';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'meClazzFeedback';
}