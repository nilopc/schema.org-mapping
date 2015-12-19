<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PaymentStatusType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentStatusTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PaymentStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PaymentStatusType::schemaUrl(), "http://schema.org/PaymentStatusType");
    }


}