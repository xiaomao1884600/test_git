<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/3/2
 * Time: 下午3:01
 */

namespace App\Services\Elastic\Models;

use App\Services\Elastic\Foundation\Base\Model;

class NeweduStudentEnrollState extends Model
{
    /**
     * Elastic 索引名称
     *
     * @var string
     */
    protected $index = 'newedu';

    /**
     * Elastic 映射名称
     *
     * @var string
     */
    protected $type = 'student_enroll_state';

    /**
     * Elastic 映射配置
     *
     * @var string
     */
    protected $mappings = 'neweduStudentEnrollState';
}