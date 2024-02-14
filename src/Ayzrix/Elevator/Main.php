<?php

namespace Ayzrix\Elevator;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

use Ayzrix\Elevator\Events\Listeners\PlayerListener;

class Main extends PluginBase{
    use SingletonTrait;

    /**
     * @return void
     */
    public function onLoad(): void{ self::setInstance($this); }
    /**
     * @return void
     */
    public function onEnable(): void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener, $this);
    }
}
