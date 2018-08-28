<?php

#Based on MCApi by @ItsYive
#Documentation: https://docs.gameapis.net/docs/mc/query#info
#Recommended php knowledge

function mcapi($address, $port)
{
    $data = json_decode(file_get_contents("https://use.gameapis.net/mc/query/info/$address:$port"), true);
    if ($data["status"] === true) {
        return $data;
    } else {
        return false;
    }
}
?>
