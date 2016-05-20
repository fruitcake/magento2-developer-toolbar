<?php

namespace Fruitcake\MagentoToolbar\Plugin;

use Magento\Framework\Profiler;
use MagentoHackathon\Toolbar\Plugin\AbstractAddCollectorPlugin;
use MagentoHackathon\Toolbar\Toolbar;
use Fruitcake\MagentoToolbar\DataCollector\ProfilerCollector;

/**
 * Plugin to collect profile information and add it to the Profiler DataCollector
 *
 */
class AddProfilerCollectorPlugin extends AbstractAddCollectorPlugin
{
    public function __construct(Toolbar $toolbar, ProfilerCollector $collector)
    {
       parent::__construct($toolbar, $collector);
    }

    /**
     * Add the EventCollector
     *
     */
    public function beforeLaunch()
    {
        parent::beforeLaunch();

        // Register the profiler, reset the existing timers
        $this->collector->resetTime();
        Profiler::add($this->collector);
        Profiler::start('magento');
    }
}
