<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans).PHP_EOL;//se importa se já fez modificações

echo str_replace(["hello", "hi"],["hi","hello"],"Hello all, I said hello").PHP_EOL;//não importa se já fez modificações
