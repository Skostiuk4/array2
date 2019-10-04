<?php

  function team($first_team, $second_team){
  $collective = [];
    foreach ($first_team as $key => $value) {
      foreach ($second_team as $key2 => $item) {
        if ($key == $key2 && $value == $item) {
            $collective[] = [
              $key => $value,
            ];
        }
      }
    }
    ksort($collective);
    return  print_r($collective) . "<br>";
  }

 $first_team = [
  'Dmytro' => 5,
  'Ivan' => 1,
  'Vova' => 6,
  'Andriy' => 3,
  'Vasyl' => 2,
  'Petro' => 4,
  'Kindrat' => 7,
  'Oleksandr' => 1,
  'Oksana' => 3,
  'Olena' => 5,
  'Kyrylo' => 3,
 ];
 $second_team = [
  'Stepan' => 5,
  'Ivan' => 1,
  'Vova' => 6,
  'Serhii' => 3,
  'Vasyl' => 2,
  'Petro' => 4,
  'Oleksiy' => 7,
  'Iruna' => 1,
  'Oksana' => 3,
  'Olena' => 5,
  'Filip' => 3,
 ];
  team($first_team, $second_team);

