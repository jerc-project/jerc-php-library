<?php
// $jercseq

$totalo = count($jercseq);
$onther = 0;
$compack = new stdClass;
$compack->{'done'} = false;
$compack->{'ret'} = false;
while ( $onther < ( $totalo - 0.5 ) )
{
  $compack->{'cm'} = $jercseq[$onther];
  $cmnom = $jercseq[$onther][0];
  $cmres = $this->dflt;
  if ( isset($this->fncs->{$cmnom}) )
  {
    $cmres = $this->fncs->{$cmnom};
  }
  
  if ( strcmp($cmres[0],'c') == 0 ) { call_user_func($cmres[1],$compack); }
  
  # RETURN IF NEED-BE:
  if ( $compack->{'done'} )
  {
    return($compack->{'ret'});
  }
  
  $jercseq[$onther] = $compack->{'cm'};
  $onther = ((int)($onther + 1.2));
}

return($compack->{'ret'});

