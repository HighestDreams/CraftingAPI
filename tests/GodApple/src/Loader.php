<?php

declare(strict_types=1);

namespace HighestDreams\Dispenser;

use pocketmine\item\ItemIds;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;
use highestdreams\craftingapi\CraftingManager; /* IMPORTANT */

class Loader extends PluginBase
{
    protected function onLoad(): void
    {
        /* Items for crafting recipe */
        $cobbleStone = ItemFactory::getInstance()->get(ItemIds::COBBLESTONE);
        $bow = ItemFactory::getInstance()->get(ItemIds::BOW);
        $redStoneDust = ItemFactory::getInstance()->get(ItemIds::REDSTONE_DUST);
        $dispenser = ItemFactory::getInstance()->get(ItemIds::DISPENSER);
        /* Adding recipes to crafting list */
        CraftingManager::addCraft([
            [$cobbleStone, $cobbleStone,  $cobbleStone],
            [$cobbleStone,     $bow     , $cobbleStone],
            [$cobbleStone, $redStoneDust, $cobbleStone],
            'product' => $dispenser
        ]);
    }

    protected function onEnable(): void
    {
        /* Registering all crafts that exist in crafting list */
        CraftingManager::registerAll();
    }
}
