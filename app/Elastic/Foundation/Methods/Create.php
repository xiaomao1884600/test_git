<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/19
 * Time: 上午10:57
 */

namespace App\Services\Elastic\Foundation\Methods;

use App\Services\Elastic\Foundation\Base\Method;

class Create extends Method
{
    public function __construct(array $attribute, string $model)
    {
        parent::__construct($attribute, $model);
    }

    public function execute(array $arguments)
    {
        // 验证 ES 索引
        $this->createIndexes();

        // 创建 es 映射
        $this->createMappings();
    }

    /**
     * 创建 Elastic 索引
     *
     * @return bool
     * @throws \Exception
     */
    private function createIndexes()
    {
        // 获取索引信息
        $indexInfo = $this->elastic->indices()->get([
            'index' => $this->index,
            'client' => [
                // 忽略404
                'ignore' => '404' ,
            ]
        ]);

        // 判断索引是否存在
        if (isset($indexInfo[$this->index]) === false) {
            // 索引不存在，创建索引
            $create = $this->elastic->indices()->create([
                'index' => $this->index,
                'body' => [
                    'settings' => $this->settings
                ]
            ]);

            // 判断索引是否创建成功
            if (false == $create['acknowledged'] || false == $create['shards_acknowledged']) {
                throw new \Exception('创建 ES 索引失败');
            }
        }

        return true;
    }

    /**
     * 创建索引映射
     *
     * @return bool
     * @throws \Exception
     */
    private function createMappings()
    {
        // 获取映射信息
        $mapping = $this->elastic->indices()->getMapping([
            'index' => $this->index,
            'type'  => $this->type,
            'client' => [
                // 忽略404
                'ignore' => '404' ,
            ]
        ]);

        // 判断映射是否存在
//        if (empty($mapping) === false && (isset($mapping['status']) && $mapping['status'] == 404)) {
//            throw new \Exception('索引 【'.$this->index.'】映射【'.$this->type.'】已经存在');
//        }

        // 创建索引
        $createMapp = $this->elastic->indices()->putMapping([
            'index' => $this->index,
            'type' => $this->type,
            'body' => [
                $this->type => $this->mappings()
            ],
        ]);

        // 判断映射是否创建成功
        if ($createMapp['acknowledged'] === false) {
            throw new \Exception('索引 【'.$this->index.'】映射【'.$this->type.'】创建失败');
        }

        return true;
    }
}