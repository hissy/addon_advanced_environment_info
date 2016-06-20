<?php
namespace Concrete\Package\AdvancedEnvironmentInfo\Controller\SinglePage\Dashboard\System\Environment;

use \Concrete\Core\Page\Controller\DashboardPageController;
use Core;
use Request;
use Config;

class AdvancedInfo extends DashboardPageController
{
    public function view() {
        $info = array();

        $app = Core::getFacadeApplication();
        $info['app'][t('Current Environment')] = $app->environment();
        $info['app'][t('Canonical URL')]    = Core::make('url/canonical');
        $info['app'][t('App Timezome')]     = Config::get('app.timezone');
        $info['app'][t('Server Timezone')]  = Config::get('app.server_timezone');
        $info['app'][t('Current Time')]     = Core::make('helper/date')->getOverridableNow();

        $request = Request::getInstance();
        $info['request'][t('Client IP')]    = $request->getClientIp();
        $info['request'][t('Host')]         = $request->getHost();
        $info['request'][t('Port')]         = $request->getPort();
        $info['request'][t('Scheme')]       = $request->getScheme();
        $info['request'][t('Secure')]       = ($request->isSecure()) ? 'true' : 'false';

        $locales = \Punic\Misc::getBrowserLocales();
        $info['misc'][t('Browser Locales')] = json_encode($locales);

        $this->set('info', $info);
        $this->set('pageTitle', t('Advanced Environment Info'));
    }
}