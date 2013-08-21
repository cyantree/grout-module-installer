<?php
namespace Cyantree\Grout\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        $extra = $package->getExtra();
        return 'modules/'.$extra['grout-module-name'].'/';
    }

    public function supports($type)
    {
        return $type === 'grout-module';
    }
}