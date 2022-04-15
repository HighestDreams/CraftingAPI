<?php

declare(strict_types=1);

namespace HighestDreams\GodApple;

use pocketmine\item\ItemIds;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;
use highestdreams\craftingapi\CraftingManager; /* IMPORTANT */

class Loader extends PluginBase
{
    protected function onLoad(): void
    {
        /* Items for crafting recipe */
        $apple = ItemFactory::getInstance()->get(ItemIds::APPLE);
        $goldBlock = ItemFactory::getInstance()->get(ItemIds::GOLD_BLOCK);
        $godApple = ItemFactory::getInstance()->get(ItemIds::APPLE_ENCHANTED);
        /* Adding recipes to crafting list */
        CraftingManager::addCraft([
            [$goldBlock, $goldBlock, $goldBlock],
            [$goldBlock, $apple, $goldBlock],
            [$goldBlock, $goldBlock, $goldBlock],
            'product' => $godApple
        ]);
    }

    protected function onEnable(): void
    {
        /* Registering all crafts that exist in crafting list */
        CraftingManager::registerAll();
    }
}
