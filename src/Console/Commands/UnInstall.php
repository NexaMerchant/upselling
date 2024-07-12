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

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Upselling:uninstall';

    protected $description = 'Uninstall Upselling an app';

    public function getAppVer() {
        return config("Upselling.ver");
    }

    public function getAppName() {
        return config("Upselling.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Upselling UnInstall cannelled");
            return false;
        }
    }
}