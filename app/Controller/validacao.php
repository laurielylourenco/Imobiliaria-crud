<?php
error_reporting(E_ALL | E_STRICT);
    class Validacao 
    {
       protected $msg = null;

        public function eNumero(array $dados){

            foreach ($dados as $key => $value) {
                if ($value) {
                    # code...
                }
            }
            
     }



        public function estaVazio(array $dados){           
                foreach($dados as $value){
                    if (empty($value))
                    {
                       
                        $this->msg = "$value campos vazios <br />";
                    }
                }
               
            return $this->msg;
        }
    }
  ?>  