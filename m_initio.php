<?php

if ( ! $this->fncs ) { $this->fncs = new stdClass; }

$this->dflt = array('c',Closure::bind(include($dflfunc),$this,$this));

