<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="icon" href="/favicons/favicon.ico">
    <link rel="stylesheet" href="/css/style.css">
    <title>Projeto IP</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <ul>
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=whois">Whois</a></li>
                    <li><a href="?page=geoip">Geo IP</a></li>
                    <li><a href="?page=currentip">Seu IP</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div>
        <h1>IP Project</h1>
        <?php
            switch (@$_REQUEST["page"]) {
                case "home":
                    include("home.php");
                    break;
                case "whois":
                    include("whois.php");
                    break;
                case "geoip":
                    include("geoip.php");
                    break;
                case "currentip":
                    include("currentip.php");
                    break;
                default:
                    include("home.php");
            }
        ?>
    </div>
</body>
</html>