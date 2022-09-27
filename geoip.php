<div>
    <h2>GeoIP</h2>
</div>
<div class="field">
    <form action="" method="POST">
        <input class="" name="ip" type="text" placeholder="177.170.7.70" v-model="geoip_ip">
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
                
                echo 'ISP: ' . $query['isp'];
                echo '<br />';
    
                echo 'City: ' . $query['city'];
                echo '<br />';
                
                echo 'Country: ' . $query['country'];
                echo '<br />';
                
                echo 'Region: ' . $query['regionName'];
            }    
        }
    ?>
</div>