# How to install
1. Download <a href="https://poggit.pmmp.io/p/Devirion">Devirion</a> & put it in your <code>plugins</code> folder.
2. Run your server to create <code>virions</code> folder automatically.
3. Download <a href="https://poggit.pmmp.io/ci/HighestDreams/CraftingAPI/~">CraftingApi</a> and paste it in your <code>virions</code> folder.
4. Now you are ready to use this crafting api.

# How to use
There are some <a href="https://github.com/HighestDreams/CraftingAPI/tree/main/tests">examples of how to use this api</a> that you can see their code to understand how to use it, Btw here is some important hints that you need to know:
1. You must use <code>CraftingManager::addCraft()</code> before registering all crafting recipes, Otherwise the recipe won't be registered.
2. By using <code>CraftingManager::registerAll()</code> You'll register all crafting recipes, Which means you don't need to register it again (If you want make +2 plugins using this api, Use <code>registerAll()</code> function just once).

# TODO List
There is nothing todo but i'll add <code>CraftingManager::register()</code> For register single recipes.
