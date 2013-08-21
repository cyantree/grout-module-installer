<?php
namespace Cyantree\Grout\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return 'modules/';
    }

    public function supports($type)
    {
        return $type === 'grout-module';
    }
}