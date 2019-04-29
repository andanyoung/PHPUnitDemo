<?php
/**
 * Created by PhpStorm.
 * User: andanyang
 * Date: 2019-04-29
 * Time: 15:36
 */

namespace Server;

class Connect
{
    public function connectToServer($serverName = null)
    {
        if ($serverName == null) {
            throw new Exception("That's not a server name!");
        }
        $fp                 = fsockopen($serverName, 80);
        $client             = new Client();
        $client->serverNmae = $serverName;
        return ($fp) ? true : false;
    }

    public function returnSampleObject() { return $this; }
}
