<?php

class model
{
    public function getRoute($pag, $folder)
    {
        if (isset($pag) && isset($folder)) {
            return "../app/" . $folder . "/" . $pag . ".php";
        }
    }

    public function formatTel($tel){
        
        if(isset($tel) && $tel != null){
            
            $ddd = substr($tel, 0,2);
            $par1 = "";
            $par2 = "";

            if(strlen($tel) == 11){
                $par1 = substr($tel, 2,5);
                $par2 = substr($tel, 7);
            }else if(strlen($tel) == 10) {
                $par1 = substr($tel, 2,4);
                $par2 = substr($tel, 6);
            }
            
            return "($ddd) $par1-$par2";
        }
    }
    
    
    
}
