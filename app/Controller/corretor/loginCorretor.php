<?php

    if (isset($_POST['loginUsuario'])) {
        
        $numeroSenha = $_POST['numeroSenha'];
        $senhaUSuario = $_POST['senhaUSuario'];
        
        if (!empty($numeroSenha) && !empty($senhaUSuario)) {
         $senhaHash = $login->makeHash($senhaUSuario);
           
         $login->loginUser($numeroSenha,$senhaHash);
         
          
        }else {
            echo "Numero ou senha vazios";
        }
    }
    