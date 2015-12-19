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
 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 */
class BrandProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/brand';
    const PROPERTY_NAME = 'brand';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
        'http://schema.org/Product',
    ];
}
