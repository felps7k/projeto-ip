<div>
    <h2>GeoIP</h2>
</div>
<div class="field">
    <form action="" method="POST">
        <div class="search-submit">
            <input class="search-box" name="ip" type="text" placeholder="177.170.7.70" v-model="geoip_ip">
            <input class="button-search" name="send" type="submit" value="Buscar">
        </div>
    </form>
</div>
<div class="result-box">
    <?php
        $ip = $_POST['ip'];
        if($ip){
            $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
            if($query && $query['status'] == 'success'){
                ?>
                <div class="result-card">
                    <?php
                        echo '<p><b>IP:</b> ' . $ip;
                        echo '</p>';
                        
                        echo '<p><b>ISP:</b> ' . $query['isp'];
                        echo '</p>';
                        
                        echo '<p><b>City:</b> ' . $query['city'];
                        echo '</p>';
                        
                        echo '<p><b>Country:</b> ' . $query['country'];
                        echo '</p>';
                        
                        echo '<p><b>Region:</b> ' . $query['regionName'];
                        echo '</p>';
                    ?>
                </div>
                <?php
            }
        }
    ?>
</div>