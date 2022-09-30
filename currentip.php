<div>
    <h2>CurrentIP</h2>
</div>
<div class="result-box">
    <?php
        $ip = $_SERVER['REMOTE_ADDR'];
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