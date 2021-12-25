<?php
/**
 * This file is part of the league/oauth2-client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Alex Bilbie <hello@alexbilbie.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link http://thephpleague.com/oauth2-client/ Documentation
 * @link https://packagist.org/packages/league/oauth2-client Packagist
 * @link https://github.com/stojankukrika/oauth2-client GitHub
 */

namespace League\OAuth2\Client\Grant;

/**
 * Represents a client credentials grant.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-1.3.4 Client Credentials (RFC 6749, §1.3.4)
 */
class ClientCredentials extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'client_credentials';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [];
    }
}
