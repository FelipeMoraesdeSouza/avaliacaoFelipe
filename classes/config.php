<?php
//credendicais do acesso ao BD
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','bd_poo');

spl_autoload_register(function ($Class){
    $dirName = array(
        'controllers',
        'models',
        'views'
    );
    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")):
            require("{$diretorios}/{$Class}.php");        
        endif;
    }
    
});