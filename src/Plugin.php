<?php


namespace Elendev\ComposerPush;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface, Capable
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    public function getCapabilities()
    {
        return array(
          'Composer\Plugin\Capability\CommandProvider' => 'Elendev\ComposerPush\PushCommandProvider',
        );
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
}
