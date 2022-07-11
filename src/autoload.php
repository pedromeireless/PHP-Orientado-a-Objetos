<?php
spl_autoload_register(function(string $nomeCompletoArquivo){
    $caminhoArquivo = str_replace('Alura\Banco', 'src', $nomeCompletoArquivo);
    $caminhoArquivo .= '.php';
    
    if (file_exists($caminhoArquivo)){
        require $caminhoArquivo;
    }
});