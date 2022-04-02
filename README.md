# How to use?
1. Put below code into your <code>plugin.yml</code>.
```PHP
depend:
  - CraftingAPI
```
2. Put below code into your main file of your plugin:
```PHP
protected function onLoad(): void
    {
        /* Access the functions inside API by making variable like thiS */
        $craftingApi = $this->getServer()->getPluginManager()->getPlugin('CraftingAPI');
        /* Make an item with ItemFactory class like this */
        $apple = ItemFactory::getInstance()->get(ItemIds::APPLE);
        $goldBlock = ItemFactory::getInstance()->get(ItemIds::GOLD_BLOCK);
        $godApple = ItemFactory::getInstance()->get(ItemIds::APPLE_ENCHANTED);
        /* Register your recipe with addCraft() function like this */
        $craftingApi->addCraft([
            [$goldBlock, $goldBlock, $goldBlock], # First row in crafting table
            [$goldBlock, $apple, $goldBlock],     # Second row in crafting table 
            [$goldBlock, $goldBlock, $goldBlock], # Third row in crafting table
            'product' => $godApple # It's the product, which don't need to explain what that is.
        ]);
        /* In example above we made god apple recipe! */
    }
```
3. Done, Now players are able to make your custom items with crafting table.
* Attention: You need add your recipe on your plugin <code>onLoad()</code> function! Otherwise it doesn't work.

Another example of adding recipes:
```PHP
$brick = ItemFactory::getInstance()->get(ItemIds::BRICK);
        $woodenSword = ItemFactory::getInstance()->get(ItemIds::WOODEN_SWORD)->setCustomName('Brick sword');
        
        $craftingApi->addCraft([
            [null, $brick, null], # Hint: You can also use empty strings instead of null!
            [null, $brick, null], 
            [null, $brick, null],
            'product' => $woodenSword
        ]);
        /* In example above we made new Brock sword recipe! */
```
