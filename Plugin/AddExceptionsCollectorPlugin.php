<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use MagentoHackathon\Toolbar\Plugin\AbstractAddCollectorPlugin;
use MagentoHackathon\Toolbar\Toolbar;
use DebugBar\DataCollector\ExceptionsCollector;
use DebugBar\DataCollector\MessagesCollector;

/**
 * Plugin to collect exceptions
 *
 */
class AddExceptionsCollectorPlugin extends AbstractAddCollectorPlugin
{
    public function __construct(Toolbar $toolbar, ExceptionsCollector $collector)
    {
        parent::__construct($toolbar, $collector);
    }
}
