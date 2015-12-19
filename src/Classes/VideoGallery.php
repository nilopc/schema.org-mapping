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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\BreadcrumbProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\LastReviewedProperty;
use NilPortugues\SchemaOrg\Properties\MainContentOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PrimaryImageOfPageProperty;
use NilPortugues\SchemaOrg\Properties\RelatedLinkProperty;
use NilPortugues\SchemaOrg\Properties\ReviewedByProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SignificantLinkProperty;
use NilPortugues\SchemaOrg\Properties\SignificantLinksProperty;
use NilPortugues\SchemaOrg\Properties\SpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes VideoGallery.
 */
class VideoGallery
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/VideoGallery';

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
    public static function breadcrumb()
    {
        return BreadcrumbProperty::create(WebPage::schemaUrl());
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
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lastReviewed()
    {
        return LastReviewedProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainContentOfPage()
    {
        return MainContentOfPageProperty::create(WebPage::schemaUrl());
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
    public static function primaryImageOfPage()
    {
        return PrimaryImageOfPageProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedLink()
    {
        return RelatedLinkProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviewedBy()
    {
        return ReviewedByProperty::create(WebPage::schemaUrl());
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
    public static function significantLink()
    {
        return SignificantLinkProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function significantLinks()
    {
        return SignificantLinksProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function specialty()
    {
        return SpecialtyProperty::create(WebPage::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
