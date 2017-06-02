<?php
$lua = new Lua();
$lua->assign("php_var", array('a', 'b', 'c'));
$lua->eval(<<<CODE
     for i = 0, 2 do
        print(i,"--", php_var[i], " ");
     end
CODE
);
