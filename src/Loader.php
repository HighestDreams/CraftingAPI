<?php

declare(strict_types=1);

namespace HighestDreams\CraftingAPI;

use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;
use pocketmine\crafting\ShapedRecipe;

final class Loader extends PluginBase
{
    /** @var array */
    private array $craftingList = array();

    protected function onEnable(): void
    {
        $default = ItemFactory::getInstance()->get(ItemIds::AIR);
        /* Registering all recipes */
        foreach ($this->craftingList as $crafting) {
            $this->getServer()->getCraftingManager()->registerShapedRecipe(new ShapedRecipe(
                array('abc', 'def', 'ghi'),
                array(
                    "a" => ($item = $crafting[0][0]) instanceof Item ? $item : $default,
                    "b" => ($item = $crafting[0][1]) instanceof Item ? $item : $default,
                    "c" => ($item = $crafting[0][2]) instanceof Item ? $item : $default,
                    "d" => ($item = $crafting[1][0]) instanceof Item ? $item : $default,
                    "e" => ($item = $crafting[1][1]) instanceof Item ? $item : $default,
                    "f" => ($item = $crafting[1][2]) instanceof Item ? $item : $default,
                    "g" => ($item = $crafting[2][0]) instanceof Item ? $item : $default,
                    "h" => ($item = $crafting[2][1]) instanceof Item ? $item : $default,
                    "i" => ($item = $crafting[2][2]) instanceof Item ? $item : $default
                ),
                [$crafting['product']]
            ));
        }
    }

    public final function addCraft(array $newRecipe): void
    {
        $this->craftingList[] = $newRecipe;
    }
}