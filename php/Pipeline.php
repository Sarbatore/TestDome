<?php

function make_pipeline(...$funcs)
{
    return function ($arg) use ($funcs) {
        $v = $arg;

        foreach ($funcs as $func) {
            $v = $func($v);
        }
        
        return $v;
    };
}

$fun = make_pipeline(
    function ($x) {
        return $x * 3;
    },
    function ($x) {
        return $x + 1;
    },
    function ($x) {
        return $x / 2;
    }
);
echo $fun(3); # should print 5