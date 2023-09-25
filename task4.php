<?php

$names=[ 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

function is_filtered_with_m($name) {
    return $name[0] == 'M';
  }

$filtered_names = array_filter($names, 'is_filtered_with_m');

print_r($filtered_names);