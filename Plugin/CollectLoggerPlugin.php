<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use Psr\Log\LoggerInterface;
use Fruitcake\MagentoToolbar\DataCollector\LoggerCollector;

/**
 * Plugin to collect messages and exceptions from the Logger and add it to the collector
 */
class CollectLoggerPlugin
{
    /** @var LoggerCollector  */
    protected $collector;

    /**
     * Constructor
     *
     * @param LoggerCollector $collector
     */
    public function __construct(LoggerCollector $collector)
    {
        $this->collector = $collector;
    }

    /**
     * Add event name to collector on dispatch
     *
     * @param LoggerInterface $logger
     * @param mixed  $message
     */
    public function beforeEmergency($logger, $message)
    {
        $this->addMessage($message, 'emergency');
    }

    public function beforeAlert($logger, $message)
    {
        $this->addMessage($message, 'alert');
    }

    public function beforeCritical($logger, $message)
    {
        $this->addMessage($message, 'critical');
    }

    public function beforeError($logger, $message)
    {
        $this->addMessage($message, 'error');
    }

    public function beforeWarning($logger, $message)
    {
        $this->addMessage($message, 'warning');
    }

    public function beforeNotice($logger, $message)
    {
        $this->addMessage($message, 'notice');
    }

    public function beforeInfo($logger, $message)
    {
        $this->addMessage($message, 'info');
    }

    public function beforeDebug($logger, $message)
    {
        $this->addMessage($message, 'debug');
    }

    public function beforeLog($logger, $message)
    {
        $this->addMessage($message, 'log');
    }

    protected function addMessage($message, $label = 'info')
    {
        $this->collector->addMessage($message, $label);
    }
}
