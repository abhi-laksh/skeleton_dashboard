<!-- 
    Make C:\foo\bar\<your_proj_dir>/
    to http://localhost/<your_proj_dir>
 -->
<?php
    if($_SERVER['SERVER_NAME'] == "localhost"){
        define( 'ROOT', 'http://'.$_SERVER['SERVER_NAME'].''.substr(str_replace('\\', '/', realpath(dirname(__FILE__))), strlen(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])))) );
    }else{
        define( 'ROOT', 'https://'.$_SERVER['SERVER_NAME'].str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))) );
    }
?>