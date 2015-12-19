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
 * The overall rating, based on a collection of reviews or ratings, of the item.
 */
class AggregateRatingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/aggregateRating';
    const PROPERTY_NAME = 'aggregateRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Event',
        'http://schema.org/Brand',
        'http://schema.org/Service',
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Offer',
        'http://schema.org/Product',
    ];
}
