<?php

//Dat je niz u kojem su smešteni odgovarajući letovi koji polaze sa nekog aerodroma u toku jednog dana. Svaki element tog niza odgovara jednom letu, pri čemu se za svaki let pamti destinacija (grad u koji avion sleće), država u kojoj se taj grad nalazi, kao i vreme poletanja aviona sa aerodroma (string u formatu “hh:mm”). U ovom zadatku, može se desiti da imamo više letova ka istoj destinaciji.

$letovi = array('Cikago' => array('USA', '12:10'), 'Paris' => array('Francuska', '14:10'), 'Pjongjang' => array('Severna Korea', '08:00'));

print_r($letovi['Pjongjang']);

?>