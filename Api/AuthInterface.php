<?php
/**
 * MageSpecialist
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magespecialist.it so we can send you a copy immediately.
 *
 * @category   MSP
 * @package    MSP_Passwd
 * @copyright  Copyright (c) 2017 Skeeller srl (http://www.magespecialist.it)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace MSP\Passwd\Api;

interface AuthInterface
{
    const AREA_FRONTEND = 'frontend';
    const AREA_BACKEND = 'backend';

    const XML_PATH_BACKEND_ENABLED = 'msp_securitysuite_passwd/general/backend_enabled';
    const XML_PATH_BACKEND_USER = 'msp_securitysuite_passwd/general/backend_user';
    const XML_PATH_BACKEND_PASS = 'msp_securitysuite_passwd/general/backend_pass';
    const XML_PATH_BACKEND_IP_WHITELIST = 'msp_securitysuite_passwd/general/backend_ip_whitelist';

    const XML_PATH_FRONTEND_ENABLED = 'msp_securitysuite_passwd/general/frontend_enabled';
    const XML_PATH_FRONTEND_USER = 'msp_securitysuite_passwd/general/frontend_user';
    const XML_PATH_FRONTEND_PASS = 'msp_securitysuite_passwd/general/frontend_pass';
    const XML_PATH_FRONTEND_IP_WHITELIST = 'msp_securitysuite_passwd/general/frontend_ip_whitelist';

    /**
     * Return true if access is authorized
     * @param \Magento\Framework\App\Request\Http $request
     * @return bool
     */
    public function isAuthorized(\Magento\Framework\App\Request\Http $request, $area);

    /**
     * Require authorization
     * @param \Magento\Framework\App\Request\Http $request
     * @return void
     */
    public function requireAuth(\Magento\Framework\App\Request\Http $request, $area);
}
