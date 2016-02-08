<?php


namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Plugin\Shortcodes;
use RocketTheme\Toolbox\Event\Event;



/**
 *
 * Class SnippetShortcode
 * @package Grav\Plugin
 */
class SnippetShortcode
{
    public function getShortcodes()
    {
        $options = [];

        return [
            new Shortcodes\BlockShortcode('snippetblock', [$this, 'block'], $options) .
            new Shortcodes\InlineShortcode('snippetinline', [$this, 'inline'], $options)
        ];
    }

    public function block(Event $event)
    {
        $filename = USER_DIR . '/data/' . $event['options']->name;
        if (file_exists($filename)) {
            $result =  file_get_contents($filename);
        } else {
            $result = '';
        }

        return $result . $event['body'];
    }

    /**
     * {{% snippet name="" %}}
     * nameにはuser/dataの中にあるファイル名を指定。
     *
     * @param Event $event
     * @return string
     */
    public function inline(Event $event)
    {
        $filename = USER_DIR . '/data/' . $event['options']->name;
        if (file_exists($filename)) {
            return file_get_contents($filename);
        } else {
            return '';
        }
    }

}

/**
 * Class SnippetPlugin
 * @package Grav\Plugin
 */
class SnippetPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onShortcodesInitialized' => ['onShortcodesInitialized', 0]
        ];
    }

    public function onShortcodesInitialized(Event $event)
    {
        // Initialize custom shortcode
        $shortcode = new SnippetShortcode();

        // Create block shortcode
        $block = new Shortcodes\BlockShortcode('snippetblock', [$shortcode, 'block']);

        // Create inline shortcode
        $inline = new Shortcodes\InlineShortcode('snippet', [$shortcode, 'inline']);

        // Register shortcodes
        $event['shortcodes']->register($block);
        $event['shortcodes']->register($inline);

        // Or register shortcodes from class (calls getShortcodes internally)
        //$event['shortcodes']->register($shortcode);
    }
}

