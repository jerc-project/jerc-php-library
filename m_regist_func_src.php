<?php
// $nameo, $srcfile

$this->fncs->{$nameo} = array('c',Closure::bind(include($srcfile),$this,$this));


