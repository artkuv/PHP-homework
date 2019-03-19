<?php

/**
 * 
 */
class a
{
    static $sdf = 6;
}

class ab extends a
{
    public function add()
    {
        $num = static::$sdf;
        echo ++$num;
    }
}

$usr = new ab();
$usr->add();
?>