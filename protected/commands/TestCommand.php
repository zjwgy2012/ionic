<?php

class TestCommand extends CConsoleCommand{
    public function run($args=array())
    {
        if (!isset($args[0]))
            echo 'asasas';
    
    }
}
