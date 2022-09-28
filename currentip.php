<div>
    <h2>CurrentIP</h2>
</div>
<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    if($ip){
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        if($query && $query['status'] == 'success')
        {
            ?>
            <div class="result-card">
            <?php
            echo 'IP: ' . $ip;
            echo '<br />';
            
            echo 'ISP: ' . $query['isp'];
            echo '<br />';
            
            echo 'City: ' . $query['city'];
            echo '<br />';
            
            echo 'Country: ' . $query['country'];
            echo '<br />';
            
            echo 'Region: ' . $query['regionName'];
            ?>
            </div>
            <?php
        }    
    }
?>