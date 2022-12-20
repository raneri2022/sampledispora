<?php

namespace App\Helpers;


class Helper
{

  public static function IDGenerator( $model, $trow, $length, $prefix){
    $data = $model::orderBy('family_id','desc')->first();
    if(!$data){
      $og_length = $length;
      $last_number ='';
    }else{     
      $code = substr($data->$trow, strlen($prefix) + 3 );
      $actial_last_number = ($code/1)*1;
      $increment_last_number = $actial_last_number + 1;
      $last_number_length = strlen($increment_last_number);
      $og_length = $length - $last_number_length;
      $last_number = $increment_last_number;
    }
    $zeros = "";
    for($i=0;$i<$og_length;$i++){
      $zeros.="0";
    }
    // return $code;
    return $prefix.'-'.$zeros.$last_number;
  }





  public static function generateChecksum($value)
            {
                if (!is_numeric($value)) {
                    throw new \InvalidArgumentException(__FUNCTION__ . ' can only accept numeric values.');
                }
    
                // Force the value to be a string so we can work with it like a string.
                $value = (string) $value;
    
                // Set some initial values up.
                $length = strlen($value);
                $parity = $length % 2;
                $sum = 0;
    
                for ($i = $length - 1; $i >= 0; --$i) {
                    // Extract a character from the value.
                    $char = $value[$i];
                    if ($i % 2 != $parity) {
                        $char *= 2;
                        if ($char > 9) {
                            $char -= 9;
                        }
                    }
                    // Add the character to the sum of characters.
                    $sum += $char;
                }
    
                // Return the value of the sum multiplied by 9 and then modulus 10.
                return ($sum * 9) % 10;
            }


}


?>