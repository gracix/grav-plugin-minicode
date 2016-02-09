<?php
namespace Grav\Plugin;

use \Grav\Common\Grav;

class SnippetTwigExtension extends \Twig_Extension
{

    protected $config;

    public function __construct()
    {
        $this->config = Grav::instance()['config'];
    }

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'SnippetTwigExtension';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('snippet', [$this, 'snippetFilter']),

        ];
    }

    /**
     * @param $content
     * @param null $options
     * @return string
     */
    public function snippetFilter($content, $options = null)
    {
        if (!$options) {
            $options = $this->config->get('plugins.snippet.options');
            var_dump($options);
        }

        $filename = USER_DIR . '/data/' . $content;
        if (file_exists($filename)) {
            return file_get_contents($filename);
        } else {
            return '';
        }

    }

}
