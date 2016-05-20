<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use MagentoHackathon\Toolbar\Toolbar;
use MagentoHackathon\Toolbar\Plugin\AbstractAddCollectorPlugin;
use Fruitcake\MagentoToolbar\DataCollector\EventsCollector;

/**
 * Adds the Events collector
 *
 */
class AddEventsCollectorPlugin extends AbstractAddCollectorPlugin
{
    public function __construct(Toolbar $toolbar, EventsCollector $collector)
    {
        parent::__construct($toolbar, $collector);
    }
}
