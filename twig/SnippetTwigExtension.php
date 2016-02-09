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
     * Register twig filter.
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('snippet', [$this, 'snippetFilter']),

        ];
    }

    /**
     * Snippet filter implementation.
     *
     * @param $content
     * @param null $options
     * @return string
     */
    public function snippetFilter($content, $options = null)
    {
        // Get data directory from plugin's option.
        $dir = $this->config['plugins.snippet.data_directory'];

        if ($dir == '') {
            $dir = 'data/'; // Default directory
        }

        // Get Realpath.
        // Return null if file not exists.
        $filename = realpath(USER_DIR . $dir . '/' . $content);
        if ($filename) {

            // Check HTML ?
            if ($this->config['plugins.snippet.check_html_dom']) {
                libxml_use_internal_errors(true); // Switch error check to user mode
                $html = file_get_contents($filename);
                $doc = new \DOMDocument();
                if (!$doc->loadHTML($html)) {
                    var_dump(libxml_get_errors());

                } else {
                    return $html;
                }
            } else {
                return file_get_contents($filename);

            }


        } else {
            return '';
        }

    }

}
