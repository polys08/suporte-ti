<?php

    function limparTexto($texto){
        return trim($texto);
    }

    function validarTitulo($titulo){
        if(strlen($titulo) >= 3){
            return true;
        }else{
            return false;
        }
    }
    
    function statusValido($status){
        return in_array($status, [
            'aberto',
            'em andamento',
            'fechado'
        ]);
}