<div class="field">
    <form action="" method="POST">
        <input class="" name="ip" type="text" placeholder="Informe o endereço IP" v-model="geoip_ip">
        <input class="" name="send" type="submit" value="Buscar">
    </form>
</div>
<div>
    <?php
        $ip = $_POST['ip'];
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
</div>