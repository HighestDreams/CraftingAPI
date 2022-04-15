<?php

declare(strict_types=1);

namespace highestdreams\craftingapi;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use pocketmine\item\ItemFactory;
use pocketmine\crafting\ShapedRecipe;

final class CraftingManager
{
    /** @var array */
    private static array $craftingList = array();

    public static final function registerAll(): void
    {
        $default = ItemFactory::getInstance()->get(ItemIds::AIR);
        /* Registering all recipes */
        foreach (self::$craftingList as $crafting) {
            Server::getInstance()->getCraftingManager()->registerShapedRecipe(new ShapedRecipe(
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

    public static final function addCraft(array $newRecipe): void
    {
        self::$craftingList[] = $newRecipe;
    }
}