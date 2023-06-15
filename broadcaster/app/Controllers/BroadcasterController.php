<?php

namespace App\Controllers;

use Liman\Toolkit\Shell\Command;

class BroadcasterController
{
    public function broadcast()
    {
        validate([
            'message' => 'required|string'
        ]);

        $flag = (bool) request('banner');

        if (!$flag) {
            Command::runSudo('wall -n @{:message}'. $flag, [
                'message' => request('message')
            ]);
        } else {
            Command::run('wall @{:message}' . $flag, [
                'message' => request('message')
            ]);
        }

        $userCount = Command::run('who | wc -l');

        return respond($userCount . __(" people received the message"), 200);
    }
}
