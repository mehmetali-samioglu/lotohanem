<?php

    if (!function_exists('Bolumle')) {
        function Bolumle($veri, $adet)
        {
            $kelimeler = explode(' ', $veri);
            if (count($kelimeler ) > $adet){
                array_splice($kelimeler , $adet);
                $veri= implode(' ', $kelimeler );
            }
            return $veri;
        }
    }

    if (!function_exists('KelimeSay')) {
        function KelimeSay($veri)
        {
            $kelimeler = explode(' ', $veri);
            return count($kelimeler);
        }
    }

