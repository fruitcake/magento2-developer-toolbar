<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use MagentoHackathon\Toolbar\Toolbar;
use DebugBar\DataCollector\MessagesCollector;
use Fruitcake\MagentoToolbar\DataCollector\LoggerCollector;

/**
 * Plugin to collect logger messages.
 *
 */
class AddLoggerCollectorPlugin
{
    /** @var  MessagesCollector */
    protected $messages;

    /** @var LoggerCollector  */
    protected $collector;

    public function __construct(MessagesCollector $messages, LoggerCollector $collector)
    {
        $this->messages = $messages;
        $this->collector = $collector;
    }

    /**
     * Add the EventCollector
     *
     */
    public function beforeLaunch()
    {
        $this->messages->aggregate($this->collector);
    }
}
