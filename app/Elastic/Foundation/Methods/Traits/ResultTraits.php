<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2018/1/22
 * Time: 上午11:45
 */

namespace App\Services\Elastic\Foundation\Methods\Traits;


trait ResultTraits
{
    public function get()
    {

    }

    public function getScroll($scroll = '1m', &$scrollId = null)
    {
        /*$query = $this->query();
        $query['scroll'] = $scroll;
        dd($query);
        $this->elastic->search($data);
        $data = $this->elastic->scroll([
            'scroll' => '10m',
            'scroll_id' => $scrollId,
        ]);
        dd($data);*/
    }
}