<?php
namespace Concrete\Package\ArchebianRepeatableLocations;

use Package;
use BlockType;

class Controller extends Package
{
    protected $pkgHandle = 'archebian_repeatable_locations';
    protected $appVersionRequired = '5.7.5.8';
    protected $pkgVersion = '0.9';

    public function getPackageName()
    {
        return t('Archebian Repeatable Locations');
    }

    public function getPackageDescription()
    {
        return t('Repeatable locations gives you a multi location map.');
    }

    public function install()
    {
        $pkg = parent::install();
		$bt = BlockType::getByHandle('archebian_repeatable_locations');
		if (!is_object($bt)) {
			BlockType::installBlockTypeFromPackage('archebian_repeatable_locations', $pkg);
		}
    }
}
