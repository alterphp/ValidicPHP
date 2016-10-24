<?php
/**
 * User's apps endpoint for the Validic API.
 *
 * PHP version 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 * @author     Aleksandar Jocic <aleks.jocic@validic.com>
 * @copyright  2016 Motivation Science, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    1.0
 * @since      File available since Release 1.0
 * @link       https://github.com/gotun/ValidicPHP
 */
namespace Validic\Endpoint;

/**
 * User's apps endpoint used to retrieve information about the specified user's
 * connected and/or available apps.
 *
 * @author Aleksandar Jocic <aleks.jocic@validic.com>
 */
class UserAppsEndpoint extends Endpoint
{

    /**
     * Constructs a user's apps endpoint.
     * 
     * @param array $options
     * @see \Validic\Endpoint\EndpointOptions
     */
    public function __construct(array $options = [])
    {
        parent::__construct(Endpoints::APPS, $options);
    }

    /**
     * Gets information about how a user's apps endpoint should be signed;
     * headers and/or filters. Overrides the parent's signWith function.
     *
     * @return array
     * @see \Validic\Endpoint\Endpoint::signWith()
     */
    public function signWith()
    {
        return [
            \Validic\Filter\Filters::__FILTERS => [
                \Validic\Filter\Filters::ACCESS_TOKEN,
                \Validic\Filter\Filters::AUTHENTICATION_TOKEN
            ]
        ];
    }

    /**
     * Gets the uri for the user's apps endpoint. Overrides the parent's getUri
     * function.
     *
     * @param array $options
     * @return string
     * @see \Validic\Endpoint\EndpointOptions
     * @see \Validic\Endpoint\Endpoint::getUri()
     */
    public function getUri(array $options = [])
    {
        $this->setUriOptions($options);
        
        return $this->base_uri . $this->path . $this->organization_id . "/" . $this->endpoint;
    }
}