<?php

namespace _64FF00\xSudo;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;

class xSudoCommand extends Command implements PluginIdentifiableCommand
{
	public function __construct(xSudo $plugin, $name, $description, $permission)
	{
		$this->plugin = $plugin;
		
		parent::__construct($name, $description);
	}
	
	public function execute(CommandSender $sender, $label, array $args)
	{
		if(!isset($args[0]) || !isset($args[1]) || count($args) > 2)
		{
			$sender->sendMessage(TextFormat::GREEN . "[xSudo] Usage: /xsudo <CONSOLE / USER> <COMMAND>");

			return true;
		}
	}
	
	public function getPlugin()
	{
		return $this->plugin;
	}
}