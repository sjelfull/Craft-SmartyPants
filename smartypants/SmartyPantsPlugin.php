<?php

namespace Craft;

class SmartyPantsPlugin extends BasePlugin {

    function getName()
    {
        return Craft::t('SmartyPants');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Fred Carlsen';
    }

    function getDeveloperUrl()
    {
        return 'http://sjelfull.no';
    }

    public function addTwigExtension()
    {
        Craft::import( 'plugins.smartypants.twigextensions.SmartyPantsTwigExtension' );
        return new SmartyPantsTwigExtension();
    }
}
