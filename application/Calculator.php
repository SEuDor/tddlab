<?php
/**
 * Created by PhpStorm.
 * Date: 09.11.2015
 * Time: 0:57
 */

namespace application;


use exceptions\NegativeItemException;

class Calculator
{

    function __construct()
    {
        echo "Done";
    }

    public function add($nums)
    {
        $parts = preg_split("/[^\d-]/", $nums);

        $negatives = [];
        $res = 0;

        foreach($parts as $token)
        {
            if($token < 0)
            {
                array_push($negatives, $token);
            }
            $res += $token;
        }

        if(!empty($negatives))
        {
            throw new NegativeItemException("Negatives are not allowed: " . implode(', ', $negatives));
        }
        return $res;
    }
}