<?php

namespace Lushidevbo\Commands;

use Telegram\Bot\Commands\Command;

class HelloCommand extends Command
{
    protected $name = 'hello';

    public function handle()
    {
        $this->replyWithMessage([
            'text' => 'Hello World!'
        ]);
    }
}