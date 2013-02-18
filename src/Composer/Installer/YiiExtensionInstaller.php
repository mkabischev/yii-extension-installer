<?php

namespace Composer\Installer;

use Composer\Package\PackageInterface;

class YiiExtensionInstaller extends LibraryInstaller
{
    public function supports( $packageType )
    {
        return 'yii-extension' === $packageType;
    }

    public function getInstallPath( PackageInterface $package )
    {
        return 'another_dir/' . $package->getPrettyName();
    }

}