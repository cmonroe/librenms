<?php

include("includes/graphs/common.inc.php");

//$rrd_options .= " -l 0 -E ";

$rrdfilename  = $config['rrd_dir'] . "/".$device['hostname']."/ubnt-airmax-mib.rrd";

if (file_exists($rrdfilename))
{
  $rrd_options .= " COMMENT:'dbm                      Now      Min     Max\\n'";
  $rrd_options .= " DEF:WlStatNoiseFloor=".$rrdfilename.":WlStatNoiseFloor:AVERAGE ";
  $rrd_options .= " LINE1:WlStatNoiseFloor#CC0000:'Noise             ' ";
  $rrd_options .= " GPRINT:WlStatNoiseFloor:LAST:%3.2lf ";
  $rrd_options .= " GPRINT:WlStatNoiseFloor:MIN:%3.2lf ";
  $rrd_options .= " GPRINT:WlStatNoiseFloor:MAX:%3.2lf\\\l ";
}

