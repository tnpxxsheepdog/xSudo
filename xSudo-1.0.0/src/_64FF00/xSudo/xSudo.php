<?php

namespace _64FF00\xSudo;

use pocketmine\plugin\PluginBase;

class xSudo extends PluginBase
{
	public function onEnable()
	{
		$commandMap = $this->getServer()->getCommandMap();
		
		$commandMap->register(
			"xsudo", 
			new xSudoCommand(
				$this, 
				"xsudo", 
				"Allows you to run commands as console or someone else."
			)
		);
	}
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/master
