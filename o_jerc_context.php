<?php

class jerc_context {
  protected $fncs = false;
  protected $dflt = false;
  protected $pvar = array();
  public function regist_func_src ( $nameo, $srcfile ) { return include(realpath(__DIR__ . "/m_regist_func_src.php")); }
  public function run_seq ( $jercseq ) { return include(realpath(__DIR__ . "/m_run_seq.php")); }
  public function initio ( $dflfunc ) { return include(realpath(__DIR__ . "/m_initio.php")); }
  
  public function inserting ( $nom, $val ) { $this->pvar[$nom] = $val; }
  public function excreting ( $nom )
  {
    if ( ! array_key_exists($nom,$this->pvar) ) { return false; }
    return($this->pvar[$nom]);
  }
}

