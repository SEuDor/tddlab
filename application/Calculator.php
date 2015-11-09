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
        if(strlen($nums) === 0)
        {
            return 0;
        }

        $parts = preg_split("/[^\d-]/", $nums);

        $res = null;

        switch(count($parts))
        {
            case 1:
                $res = $parts[0];
                break;
            case 2:
                $res = $parts[0] + $parts[1];
                break;
        }

        return $res;
    }
}