<?php
/**
 * Key names for the \Validic\Filter\BasicFilter class.
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
namespace Validic\Filter;

/**
 * Lists the key names for the \Validic\Filter\BasicFilter class.
 *
 * @author Aleksandar Jocic <aleks.jocic@validic.com>
 * @see \Validic\Filter\BasicFilter
 */
class BasicFilters
{

    /**
     * expanded: (string) The key name of the expanded filter.
     */
    const EXPANDED = 'expanded';

    /**
     * show_media: (string) The key name for the show_media filter.
     */
    const MEDIA = 'show_media';
    
    /**
     * show_original_source: (string) The key name for the show_original_source filter.
     */
    const ORIGINAL_SOURCE = 'show_original_source';

    /**
     * synced: (string) The key name for the synced filter.
     */
    const SYNCED = 'synced';
}