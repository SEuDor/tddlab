<?php
/**
 * Created by PhpStorm.
 * Date: 09.11.2015
 * Time: 0:57
 */

namespace application;


class Calculator
{

    function __construct()
    {
        echo "Done";
    }

    public function add($nums)
    {
        $parts = preg_split("/[^\d-]/", $nums);

        if(empty($parts))
        {
            return 0;
        }

        $res = 0;
        foreach ($parts as $token)
        {
            $res += $token;
        }

        return $res;
    }
}