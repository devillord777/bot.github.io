<?php

class Task{
  // Function returns the length of the last word of a given sentence, or 0 for empty string.
  static function last_word($sentence){
    if(!isset($sentence)){
      $result = '0';
    }else{
      $all_word=explode(" ", $sentence);
      $last_word=$all_word[count(explode(" ", $sentence))-1];
      $result = strlen($last_word);

    }
  return $result;
 }
//  Function returns a date formatted in sql date format. 
  static function sql_date_format($dateStr){
    $date=new DateTime($dateStr);
    $result = $date->format('d.m.Y H:i') . PHP_EOL;
  
  return $result;
 }
 // Function returns a part of a string that is marked with square parenthesis, if exists
  static function extract_string($str){
    preg_match("((?<=\[).*?(?=\]))",$str,$matches);
  
    return $matches[0];
  }
}
