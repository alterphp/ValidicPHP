<?php
/**
 * The endpoints from Validic that use a short route format.
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
 * Lists the endpoints from Validic that use a short route format generally used
 * for user specific information and signed with an authentication token.
 *
 * @author Aleksandar Jocic <aleks.jocic@validic.com>
 * @see \Validic\Endpoint\ShortEndpoint
 */
class ShortEndpoints extends Endpoints
{

    /**
     * profile: The endpoint to access a user's profile information.
     */
    const PROFILE = 'profile';

    /**
     * me: The endpoint to access a user's Validic id.
     */
    const ME = 'me';
}