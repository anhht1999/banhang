<?php
    class Calculator
    {
        // public $a,$b;
    
        // public function add($a, $b)
        // {
        //     return $a + $b;
        // }
     
        public function login($tai_khoan, $mat_khau){

            if($mat_khau == '' || $mat_khau == ''){
                return false;
            }
            else{
                if(($tai_khoan == 'admin' && $mat_khau == '') 
                || ($tai_khoan == '' && $mat_khau= 'admin') 
                || ($tai_khoan != 'admin' || $mat_khau != 'admin')) return false;
                elseif(($tai_khoan == 'admin' && $mat_khau == 'admin')) return true;
            }
        }
    }
?>