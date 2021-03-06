<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerTickevent
 */

namespace DragonJsonServerTickevent\Api;

/**
 * API Klasse zur Verwaltung von Tickevents
 */
class TickeventAdmin
{
	use \DragonJsonServer\ServiceManagerTrait;

	/**
	 * Triggert ein Tickevent an alle Listener
	 */
	public function tickevent()
	{
		$this->getServiceManager()->get('\DragonJsonServerTickevent\Service\TickeventAdmin')->tickevent();
	}
}
