<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage graphs
 * @copyright  (C) 2006-2013 Adam Armstrong, (C) 2013-2016 Observium Limited
 *
 */

$rrd_list[0]['filename'] = $rrd_filename;
$rrd_list[0]['descr'] = "Mon Clients";
$rrd_list[0]['ds'] = "nummonclients";

$unit_text = "Clients";

$units='';
$total_units='';
$colours='mixed';

$scale_min = "0";

$nototal = 1;

if ($rrd_list)
{
  include("includes/graphs/generic_multi_line.inc.php");
}

?>
