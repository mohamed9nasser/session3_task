<?php
//- PHP Program to Check an Element Exists in Array or Not

$arr = array('Alice', 'Jack', 'Leo', 'Dora');

if (in_array('Jack', $arr)){
  echo "Item is Found";
}
else {
  echo "Item is Not Found";
}
?>