<?php

$lua = new Lua();
function nj() {
    echo 'nj';
}
$lua->registerCallback("echo", "nj"); //可以是任意合法的php函数
$lua->eval(<<<CODE
  echo({'a', 'b'})
CODE
);
