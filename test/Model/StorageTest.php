<?php
/**
 * StorageTest
 *
 * PHP version 7
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */


namespace CollingMedia\Lasso;

use PHPUnit\Framework\TestCase;
/**
 * StorageTest Class Doc Comment
 *
 * @category    Class
 * @description For all storage types, if no specific storage option is given (by setting &#x60;uniqueId&#x60;), the next unassigned storage option is associated to the inventory.
 * @package     CollingMedia\Lasso
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StorageTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Storage"
     */
    public function testStorage()
    {
    }

    /**
     * Test attribute "unique_id"
     */
    public function testPropertyUniqueId()
    {
    }

    /**
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
    }

    /**
     * Test attribute "payment_received_date"
     */
    public function testPropertyPaymentReceivedDate()
    {
    }

    /**
     * Test attribute "outside_of_contract"
     */
    public function testPropertyOutsideOfContract()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }
}
