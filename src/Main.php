<?php //Start Plgins Always with <?php to decsribe its code
namespace PocketWelcomer; //Version 1.0

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent; //Describes join event
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

  public function onEnable(){ //You will see this message on console if plugin is activated
    $this->getServer()->getPluginManager->registerEvents($this);
    $this->getLogger()->info("PocketWelcomer Version 1.0 Activated by PocketOfDevs!");
    }
    
      public function onPlayerJoin(PlayerJoinEvent $event){
    $p = event->getPlayer();
    $p->sendMessage("§l§b=-=-=-=-=-=-=-=-§a=-=-=-=-=-=-=-=-=");
    $p->sendMessage("§l§6Welcome §r§7to §bPocket§dGames§7!");
    $p->sendMessage("§r§3Vote§f: §7vote.pocketgames.org");
    $p->sendMessage("§r§3Shop§f: §7shop.pocketgames.org");
    $p->sendMessage("§r§3Discord§f: §7discord.pocketgames.org");
    $p->sendMessage("§l§b=-=-=-=-=-=-=-=-§a=-=-=-=-=-=-=-=-=");
  }
