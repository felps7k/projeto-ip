<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    if($ip){
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        if($query && $query['status'] == 'success')
        {
            echo 'IP: ' . $ip;
            echo '<br />';
            
            echo 'Provedor: ' . $query['isp'];
            echo '<br />';

            echo 'Cidade: ' . $query['city'];
            echo '<br />';
            
            echo 'País: ' . $query['country'];
            echo '<br />';
            
            echo 'Região: ' . $query['regionName'];
        }    
    }
?>