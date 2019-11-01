<?php
/**
 * SMTPApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailvio API Reference
 *
 * Mailvio provides a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/KVSocial/mailvio-api  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: support@mailvio.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * SMTPApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SMTPApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for createSmtpTemplate
     *
     * Create a transactional email template.
     *
     */
    public function testCreateSmtpTemplate()
    {

    }

    /**
     * Test case for deleteHardbounces
     *
     * Delete hardbounces.
     *
     */
    public function testDeleteHardbounces()
    {

    }

    /**
     * Test case for deleteSmtpTemplate
     *
     * Delete an inactive transactional email template.
     *
     */
    public function testDeleteSmtpTemplate()
    {

    }

    /**
     * Test case for getAggregatedSmtpReport
     *
     * Get your transactional email activity aggregated over a period of time.
     *
     */
    public function testGetAggregatedSmtpReport()
    {

    }

    /**
     * Test case for getEmailEventReport
     *
     * Get all your transactional email activity (unaggregated events).
     *
     */
    public function testGetEmailEventReport()
    {

    }

    /**
     * Test case for getSmtpReport
     *
     * Get your transactional email activity aggregated per day.
     *
     */
    public function testGetSmtpReport()
    {

    }

    /**
     * Test case for getSmtpTemplate
     *
     * Returns the template informations.
     *
     */
    public function testGetSmtpTemplate()
    {

    }

    /**
     * Test case for getSmtpTemplates
     *
     * Get the list of transactional email templates.
     *
     */
    public function testGetSmtpTemplates()
    {

    }

    /**
     * Test case for getTransacBlockedContacts
     *
     * Get the list of blocked or unsubscribed transactional contacts.
     *
     */
    public function testGetTransacBlockedContacts()
    {

    }

    /**
     * Test case for getTransacEmailContent
     *
     * Get the personalized content of a sent transactional email.
     *
     */
    public function testGetTransacEmailContent()
    {

    }

    /**
     * Test case for getTransacEmailsList
     *
     * Get the list of transactional emails on the basis of allowed filters.
     *
     */
    public function testGetTransacEmailsList()
    {

    }

    /**
     * Test case for sendTemplate
     *
     * Send a template.
     *
     */
    public function testSendTemplate()
    {

    }

    /**
     * Test case for sendTestTemplate
     *
     * Send a template to your test list.
     *
     */
    public function testSendTestTemplate()
    {

    }

    /**
     * Test case for sendTransacEmail
     *
     * Send a transactional email.
     *
     */
    public function testSendTransacEmail()
    {

    }

    /**
     * Test case for updateSmtpTemplate
     *
     * Updates a transactional email templates.
     *
     */
    public function testUpdateSmtpTemplate()
    {

    }

}