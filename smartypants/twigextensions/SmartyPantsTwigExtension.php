<?php namespace Craft;

require_once(CRAFT_PLUGINS_PATH.'smartypants/vendor/autoload.php');

use Michelf\SmartyPants;
use Michelf\SmartyPantsTypographer;
use Twig_Extension;
use Twig_Filter_Method;

class SmartyPantsTwigExtension extends \Twig_Extension {

    public function getName()
    {
        return 'SmartyPants';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(

            'smartypants'      => new Twig_Filter_Method($this, 'format'),
            'smartyTypographer' => new Twig_Filter_Method($this, 'typographer'),

        );
    }

    /**
     * @param $html
     * @return \Twig_Markup
     */
    public function format($html)
    {
        $html = SmartyPants::defaultTransform($html);
        return TemplateHelper::getRaw($html);
    }

    /**
     * @param $html
     * @return \Twig_Markup
     */
    public function typographer($html)
    {
        $html = SmartyPantsTypographer::defaultTransform($html);
        return TemplateHelper::getRaw($html);
    }

}