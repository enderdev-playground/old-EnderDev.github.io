<?php

#Based on MCApi by @ItsYive
#Documentation: https://docs.gameapis.net/docs/mc/query#info
#Recommended php knowledge

include ('mcapi.php');

#IMPORTANT You have to enter an valid IP address, domains won't work
$mcapi = mcapi("mc.hypixel.net", "25565");
if ($mcapi != false) {
    $motd          = $mcapi["motds"]["html"];
    $playersMax    = $mcapi["players"]["max"];
    $playersOnline = $mcapi["players"]["online"];
    $ping          = $mcapi["ping"];
    $version       = $mcapi["version"];
    $favicon       = $mcapi["favicon"];

    echo "Players Online: $playersOnline, Players Max: $playersMax <br />";
    echo "Version: $version <br />";
    echo "Ping: $ping <br />";
    echo "$motd <br />";
    echo "<img src=\"$favicon\"/> <br />";
} else {
    echo "Server is offline or unreachable.";
}


?>
