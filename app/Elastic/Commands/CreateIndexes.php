<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/18
 * Time: 下午5:27
 */

namespace App\Services\Elastic\Commands;


use App\Services\Elastic\Foundation\Base\Commands;

class CreateIndexes extends Commands
{
    /**
     * 命令行入口方法
     *
     * @param string $model Elastic 模型名称
     * @return mixed
     */
    public function commands(string $model)
    {
        // 初使化服务类
        $this->init($model);

        // 创建 ES 索引
        $this->models->create();
    }

    /**
     * 初使方法
     *
     * @param string $model Elastic 模型名称
     */
    protected function init(string $model)
    {
        // 验证模型是否存在并实例化模型
        $this->validateModel($model);
    }
}