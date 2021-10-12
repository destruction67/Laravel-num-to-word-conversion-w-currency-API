<?php 

 function convertCurrency($amount, $from, $to){
    $conv_id = "{$from}_{$to}";
    $string = file_get_contents("https://www.amdoren.com/api/currency.php?api_key=pwu5FcPWJGnTn4hmYJSzsparsG4wrV&from=$from&to=$to&amount=$amount");
    $json_a = json_decode($string, true);
    $base_price = $amount; // Your price in USD
    $EUR_price = round(($base_price * $json_a->amount), 2);
  
    return $amount * round(4);


    
  }
  return $amount * round($json_a->amount);
?>