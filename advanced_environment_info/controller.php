<?php
namespace Concrete\Package\AdvancedEnvironmentInfo;

use Concrete\Core\Backup\ContentImporter;

class Controller extends \Concrete\Core\Package\Package {

    protected $pkgHandle = 'advanced_environment_info';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.1';

    public function getPackageDescription()
    {
        return t("A dashboard page to show additional environment information.");
    }

    public function getPackageName()
    {
        return t("Advanced Environment Info");
    }

    public function install()
    {
        $pkg = parent::install();
        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/config/dashboard.xml');
    }

}