<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use MagentoHackathon\Toolbar\Plugin\AbstractAddCollectorPlugin;
use MagentoHackathon\Toolbar\Toolbar;
use DebugBar\DataCollector\RequestDataCollector;

/**
 * Collect Request data
 *
 */
class AddRequestCollectorPlugin extends AbstractAddCollectorPlugin
{
    public function __construct(Toolbar $toolbar, RequestDataCollector $collector)
    {
        parent::__construct($toolbar, $collector);
    }
}
