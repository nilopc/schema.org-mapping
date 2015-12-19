<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActorProperty;
use NilPortugues\SchemaOrg\Properties\ActorsProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\CountryOfOriginProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DirectorProperty;
use NilPortugues\SchemaOrg\Properties\DirectorsProperty;
use NilPortugues\SchemaOrg\Properties\DurationProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MusicByProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SubtitleLanguageProperty;
use NilPortugues\SchemaOrg\Properties\TrailerProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes Movie.
 */
class Movie
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Movie';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function actor()
    {
        return ActorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function actors()
    {
        return ActorsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function countryOfOrigin()
    {
        return CountryOfOriginProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function director()
    {
        return DirectorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function directors()
    {
        return DirectorsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duration()
    {
        return DurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function musicBy()
    {
        return MusicByProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productionCompany()
    {
        return ProductionCompanyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subtitleLanguage()
    {
        return SubtitleLanguageProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function trailer()
    {
        return TrailerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
