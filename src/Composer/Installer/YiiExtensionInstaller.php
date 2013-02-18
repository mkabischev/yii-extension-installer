<?php

namespace Composer\Installer;

use Composer\Package\PackageInterface;

class YiiExtensionInstaller extends LibraryInstaller
{
    const DEFAULT_PATH = 'protected/extensions';

    public function supports( $packageType )
    {
        return 'yii-extension' === $packageType;
    }

    public function getInstallPath( PackageInterface $package )
    {
        $installPath = self::DEFAULT_PATH;
        $extra       = $this->composer->getPackage()->getExtra();
        if ( array_key_exists( 'yii_extensions_path', $extra ) ) {
            $installPath = $extra['yii_extensions_path'];
        }
        return $installPath . DIRECTORY_SEPARATOR . $package->getPrettyName();
    }

}