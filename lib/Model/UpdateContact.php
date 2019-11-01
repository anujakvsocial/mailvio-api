<?php
/**
 * UpdateContact
 *
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * UpdateContact Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateContact implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'attributes' => 'object',
        'email_blacklisted' => 'bool',
        'sms_blacklisted' => 'bool',
        'list_ids' => 'int[]',
        'unlink_list_ids' => 'int[]',
        'smtp_blacklist_sender' => 'string[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'attributes' => 'attributes',
        'email_blacklisted' => 'emailBlacklisted',
        'sms_blacklisted' => 'smsBlacklisted',
        'list_ids' => 'listIds',
        'unlink_list_ids' => 'unlinkListIds',
        'smtp_blacklist_sender' => 'smtpBlacklistSender'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'attributes' => 'setAttributes',
        'email_blacklisted' => 'setEmailBlacklisted',
        'sms_blacklisted' => 'setSmsBlacklisted',
        'list_ids' => 'setListIds',
        'unlink_list_ids' => 'setUnlinkListIds',
        'smtp_blacklist_sender' => 'setSmtpBlacklistSender'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'attributes' => 'getAttributes',
        'email_blacklisted' => 'getEmailBlacklisted',
        'sms_blacklisted' => 'getSmsBlacklisted',
        'list_ids' => 'getListIds',
        'unlink_list_ids' => 'getUnlinkListIds',
        'smtp_blacklist_sender' => 'getSmtpBlacklistSender'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['email_blacklisted'] = isset($data['email_blacklisted']) ? $data['email_blacklisted'] : null;
        $this->container['sms_blacklisted'] = isset($data['sms_blacklisted']) ? $data['sms_blacklisted'] : null;
        $this->container['list_ids'] = isset($data['list_ids']) ? $data['list_ids'] : null;
        $this->container['unlink_list_ids'] = isset($data['unlink_list_ids']) ? $data['unlink_list_ids'] : null;
        $this->container['smtp_blacklist_sender'] = isset($data['smtp_blacklist_sender']) ? $data['smtp_blacklist_sender'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets attributes
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param object $attributes Pass the set of attributes to be updated. These attributes must be present in your account. To update existing email address of a contact with the new one please pass EMAIL in attribtes. For eg. { 'EMAIL':'newemail@domain.com', 'FNAME':'Ellie', 'LNAME':'Roger'}
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets email_blacklisted
     * @return bool
     */
    public function getEmailBlacklisted()
    {
        return $this->container['email_blacklisted'];
    }

    /**
     * Sets email_blacklisted
     * @param bool $email_blacklisted Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted = true)
     * @return $this
     */
    public function setEmailBlacklisted($email_blacklisted)
    {
        $this->container['email_blacklisted'] = $email_blacklisted;

        return $this;
    }

    /**
     * Gets sms_blacklisted
     * @return bool
     */
    public function getSmsBlacklisted()
    {
        return $this->container['sms_blacklisted'];
    }

    /**
     * Sets sms_blacklisted
     * @param bool $sms_blacklisted Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted = true)
     * @return $this
     */
    public function setSmsBlacklisted($sms_blacklisted)
    {
        $this->container['sms_blacklisted'] = $sms_blacklisted;

        return $this;
    }

    /**
     * Gets list_ids
     * @return int[]
     */
    public function getListIds()
    {
        return $this->container['list_ids'];
    }

    /**
     * Sets list_ids
     * @param int[] $list_ids Ids of the lists to add the contact to
     * @return $this
     */
    public function setListIds($list_ids)
    {
        $this->container['list_ids'] = $list_ids;

        return $this;
    }

    /**
     * Gets unlink_list_ids
     * @return int[]
     */
    public function getUnlinkListIds()
    {
        return $this->container['unlink_list_ids'];
    }

    /**
     * Sets unlink_list_ids
     * @param int[] $unlink_list_ids Ids of the lists to remove the contact from
     * @return $this
     */
    public function setUnlinkListIds($unlink_list_ids)
    {
        $this->container['unlink_list_ids'] = $unlink_list_ids;

        return $this;
    }

    /**
     * Gets smtp_blacklist_sender
     * @return string[]
     */
    public function getSmtpBlacklistSender()
    {
        return $this->container['smtp_blacklist_sender'];
    }

    /**
     * Sets smtp_blacklist_sender
     * @param string[] $smtp_blacklist_sender transactional email forbidden sender for contact. Use only for email Contact
     * @return $this
     */
    public function setSmtpBlacklistSender($smtp_blacklist_sender)
    {
        $this->container['smtp_blacklist_sender'] = $smtp_blacklist_sender;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


