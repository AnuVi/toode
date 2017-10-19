<?php
use Illuminate\Support\Str;
if (!function_exists('formatPrice')) {

    /**
     * Format integer to a price
     *
     * @param integer $price
     *
     * @return string
     */
    function formatPrice($price)
    {
      
        //setlocale(LC_MONETARY, 'en_US.UTF-8');
        //money_format('%.2n', $price);
        $price_formated  = number_format($price, 2, ',','');

// 2 = decimal places |  '.' = decimal seperator | ',' = thousand seperator

        return $price_formated;
    }
}


 function getMeDate($input){
          return Carbon\Carbon::setToStringFormat('d.m.Y', $input);
        // $dt = setlocale(LC_TIME, 'German');
        //return $dt->formatLocalized('%A %d %B %Y');
       /* $a = Carbon\Carbon::parse($input);
        $date = Carbon\Carbon::createFromFormat($format, $a);
        return $date;*/
 }

 function isAdmin($user){
        if($user == 0){
            return true;
        } else {
            return false;
        }
 }

function limitText($value, $limitt){

        return Str::limit($value, $limit = $limitt, $end = ' ...');
}
 
 
