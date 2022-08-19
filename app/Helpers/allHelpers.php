<?php

if (!function_exists("first_upper")) {
    
    function first_upper($str, $encoding='UTF-8') {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

}

if (!function_exists("get_cat_img_url")) { 
    function get_cat_img_url($slug) {
        $allCatPhoto = [
            // "vlagozashhishhennye-tocecnye-svetilniki-2896" => "vlagozashhishhennye-tocecnye-svetilniki-2896.jpg",
            // "vstraivaemye-tocecnye-svetilniki-2897" => "vstraivaemye-tocecnye-svetilniki-2897.jpg",
            // "nakladnye-tocecnye-svetilniki-2898" => "nakladnye-tocecnye-svetilniki-2898.jpg",
        ];

        return (!empty($allCatPhoto[$slug]))?asset('img/category_img/'.$allCatPhoto[$slug]):asset('img/no_photo.jpg');
    }
}

?>