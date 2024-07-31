<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-12 15:48:01
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Upselling\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Upselling:install';

    protected $description = 'Install Upselling an app';

    public function getAppVer() {
        return config("Upselling.ver");
    }

    public function getAppName() {
        return config("Upselling.name");
    }

    public function handle()
    {
        $this->info("Install app: Upselling");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Upselling Install cannelled");
            return false;
        }
    }
}