<?php

defined('_JEXEC') or die;

if (class_exists('plgInstallerGrtthemeInstallerScript', false)) {
    return;
}

class plgInstallerGrtthemeInstallerScript
{
    public function install($parent)
    {
        JFactory::getDBO()->setQuery("UPDATE #__extensions SET enabled = 1 WHERE type = 'plugin' AND folder = 'installer' AND element = 'grttheme'")->execute();
    }

    public function uninstall($parent) {}

    public function update($parent) {}

    public function preflight($type, $parent) {}

    public function postflight($type, $parent) {}
}