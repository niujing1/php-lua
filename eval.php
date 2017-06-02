<?php
$lua = new Lua();
//把字符串当做lua代码来执行，会输出test for lua
$lua->eval(<<<CODE
  print("test for eval"); 
CODE
);
