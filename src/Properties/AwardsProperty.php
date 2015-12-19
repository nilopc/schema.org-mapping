<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Awards won by or for this item.
 */
class AwardsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/awards';
    const PROPERTY_NAME = 'awards';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Organization',
        'http://schema.org/Person',
        'http://schema.org/Product',
    ];
}
