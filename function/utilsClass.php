<?php
    class Utils{
        public function __construct() {
        }
        
        public function __destruct(){
        }
        
        public function readJson($file){
            $dataFile = file_get_contents($file);
            $data = json_decode($dataFile, true);
            return $data;
        }

        public function url_amigables($url){
            $url = strtolower($url);
            $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ');
            $replace = array('a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N');
            $url = str_replace($find,$replace,$url);
            $find = array(' ','´','&', '\r\n', '\n', '+');
            $url = str_replace($find,'-',$url);
            $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
            $replace = array('', '_', '');
            $url = str_replace($find, $replace, $url);
            return $url;
        }

        public function numRomano($num) {
            if ($num <0 || $num >9999) { return -1; }
                
            $r_ones = array(1=>"I", 2=>"II", 3=>"III", 4=>"IV", 5=>"V", 6=>"VI", 7=>"VII", 8=>"VIII", 9=>"IX");
    
            $r_tens = array(1=>"X", 2=>"XX", 3=>"XXX", 4=>"XL", 5=>"L", 6=>"LX", 7=>"LXX", 8=>"LXXX", 9=>"XC");
    
            $r_hund = array(1=>"C", 2=>"CC", 3=>"CCC", 4=>"CD", 5=>"D", 6=>"DC", 7=>"DCC", 8=>"DCCC", 9=>"CM");
    
            $r_thou = array(1=>"M", 2=>"MM", 3=>"MMM", 4=>"MMMM", 5=>"MMMMM", 6=>"MMMMMM", 7=>"MMMMMMM", 8=>"MMMMMMMM", 9=>"MMMMMMMMM");
    
            $ones = $num % 10;
            $tens = ($num - $ones) % 100;
            $hundreds = ($num - $tens - $ones) % 1000;
            $thou = ($num - $hundreds - $tens - $ones) % 10000;
            $tens = $tens / 10;
            $hundreds = $hundreds / 100;
            $thou = $thou / 1000;
    
            $rnum = NULL;
    
            if ($thou) { $rnum .= $r_thou[$thou]; }
            if ($hundreds) { $rnum .= $r_hund[$hundreds]; }
            if ($tens) { $rnum .= $r_tens[$tens]; }
            if ($ones) { $rnum .= $r_ones[$ones]; }
            
            return $rnum;
        }

        public function getFecha($date) {
            $date = strtotime($date);
            $weekday = date("w", $date);
            switch ($weekday) {
                case '0': $weekday = "Domingo"; break;
                case '1': $weekday = "Lunes"; break;
                case '2': $weekday = "Martes"; break;
                case '3': $weekday = "Miércoles"; break;
                case '4': $weekday = "Jueves"; break;
                case '5': $weekday = "Viernes"; break;
                case '6': $weekday = "Sábado"; break;
            }
    
            $day = date("d", $date);
            $month = date("m", $date);
    
            switch ($month) {
                case '01': $month = "enero"; break;
                case '02': $month = "febrero"; break;
                case '03': $month = "marzo"; break;
                case '04': $month = "abril"; break;
                case '05': $month = "mayo"; break;
                case '06': $month = "junio"; break;
                case '07': $month = "julio"; break;
                case '08': $month = "agosto"; break;
                case '09': $month = "septiembre"; break;
                case '10': $month = "octubre"; break;
                case '11': $month = "noviembre"; break;
                case '12': $month = "diciembre"; break;
            }
            $year = date("Y", $date);
            $date = $weekday." ".$day." de ".$month." de ".$year;
            return $date;
        }
    }
?>