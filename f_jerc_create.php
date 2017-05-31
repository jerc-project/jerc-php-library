<?php

// This function creates a JERC context-structure.

function jerc_create ( $default )
{
  $reto = new jerc_context;
  $reto->initio($default);
  return $reto;
}

