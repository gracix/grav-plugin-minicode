<?php
namespace Grav\Plugin;

use Grav\Common\Data;
use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use RocketTheme\Toolbox\Event\Event;


/**
 * Class SnippetPlugin
 * @package Grav\Plugin
 */
class SnippetPlugin extends Plugin
{
    /**
     * @var SnippetPlugin
     */

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onBlueprintCreated' => ['onBlueprintCreated', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin() && !$this->config->get('plugins.snippet.enabled_in_admin', false)) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0],
        ]);
    }

    /**
     * Add Twig Extensions
     */
    public function onTwigExtensions()
    {
        if (!$this->config->get('plugins.snippet.twig_filter')) {
            return;
        }

        require_once(__DIR__ . '/twig/SnippetTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new SnippetTwigExtension());
    }


    /**
     * Extend page blueprints with feed configuration options.
     *
     * @param Event $event
     */
    public function onBlueprintCreated(Event $event)
    {
        static $inEvent = false;

        /** @var Data\Blueprint $blueprint */
        $blueprint = $event['blueprint'];
        if (!$inEvent && $blueprint->get('form.fields.tabs')) {
            $inEvent = true;
            $blueprints = new Data\Blueprints(__DIR__ . '/blueprints/');
            $extends = $blueprints->get('snippet');
            $blueprint->extend($extends, true);
            $inEvent = false;
        }
    }

}

