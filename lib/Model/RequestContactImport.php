<?php
/**
 * RequestContactImport
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
 * RequestContactImport Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestContactImport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'requestContactImport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'file_url' => 'string',
        'file_body' => 'string',
        'list_ids' => 'int[]',
        'notify_url' => 'string',
        'new_list' => '\Swagger\Client\Model\RequestContactImportNewList',
        'email_blacklist' => 'bool',
        'sms_blacklist' => 'bool',
        'update_existing_contacts' => 'bool',
        'empty_contacts_attributes' => 'bool'
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
        'file_url' => 'fileUrl',
        'file_body' => 'fileBody',
        'list_ids' => 'listIds',
        'notify_url' => 'notifyUrl',
        'new_list' => 'newList',
        'email_blacklist' => 'emailBlacklist',
        'sms_blacklist' => 'smsBlacklist',
        'update_existing_contacts' => 'updateExistingContacts',
        'empty_contacts_attributes' => 'emptyContactsAttributes'
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
        'file_url' => 'setFileUrl',
        'file_body' => 'setFileBody',
        'list_ids' => 'setListIds',
        'notify_url' => 'setNotifyUrl',
        'new_list' => 'setNewList',
        'email_blacklist' => 'setEmailBlacklist',
        'sms_blacklist' => 'setSmsBlacklist',
        'update_existing_contacts' => 'setUpdateExistingContacts',
        'empty_contacts_attributes' => 'setEmptyContactsAttributes'
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
        'file_url' => 'getFileUrl',
        'file_body' => 'getFileBody',
        'list_ids' => 'getListIds',
        'notify_url' => 'getNotifyUrl',
        'new_list' => 'getNewList',
        'email_blacklist' => 'getEmailBlacklist',
        'sms_blacklist' => 'getSmsBlacklist',
        'update_existing_contacts' => 'getUpdateExistingContacts',
        'empty_contacts_attributes' => 'getEmptyContactsAttributes'
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
        $this->container['file_url'] = isset($data['file_url']) ? $data['file_url'] : null;
        $this->container['file_body'] = isset($data['file_body']) ? $data['file_body'] : null;
        $this->container['list_ids'] = isset($data['list_ids']) ? $data['list_ids'] : null;
        $this->container['notify_url'] = isset($data['notify_url']) ? $data['notify_url'] : null;
        $this->container['new_list'] = isset($data['new_list']) ? $data['new_list'] : null;
        $this->container['email_blacklist'] = isset($data['email_blacklist']) ? $data['email_blacklist'] : null;
        $this->container['sms_blacklist'] = isset($data['sms_blacklist']) ? $data['sms_blacklist'] : null;
        $this->container['update_existing_contacts'] = isset($data['update_existing_contacts']) ? $data['update_existing_contacts'] : null;
        $this->container['empty_contacts_attributes'] = isset($data['empty_contacts_attributes']) ? $data['empty_contacts_attributes'] : null;
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
     * Gets file_url
     * @return string
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     * @param string $file_url Mandatory if fileBody is not defined. URL of the file to be imported (no local file). Possible file formats: .txt, .csv
     * @return $this
     */
    public function setFileUrl($file_url)
    {
        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets file_body
     * @return string
     */
    public function getFileBody()
    {
        return $this->container['file_body'];
    }

    /**
     * Sets file_body
     * @param string $file_body Mandatory if fileUrl is not defined. CSV content to be imported. Use semicolon to separate multiple attributes
     * @return $this
     */
    public function setFileBody($file_body)
    {
        $this->container['file_body'] = $file_body;

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
     * @param int[] $list_ids Mandatory if newList is not defined. Ids of the lists in which the contacts shall be imported. For example, [2, 4, 7].
     * @return $this
     */
    public function setListIds($list_ids)
    {
        $this->container['list_ids'] = $list_ids;

        return $this;
    }

    /**
     * Gets notify_url
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url
     * @param string $notify_url URL that will be called once the export process is finished
     * @return $this
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

        return $this;
    }

    /**
     * Gets new_list
     * @return \Swagger\Client\Model\RequestContactImportNewList
     */
    public function getNewList()
    {
        return $this->container['new_list'];
    }

    /**
     * Sets new_list
     * @param \Swagger\Client\Model\RequestContactImportNewList $new_list
     * @return $this
     */
    public function setNewList($new_list)
    {
        $this->container['new_list'] = $new_list;

        return $this;
    }

    /**
     * Gets email_blacklist
     * @return bool
     */
    public function getEmailBlacklist()
    {
        return $this->container['email_blacklist'];
    }

    /**
     * Sets email_blacklist
     * @param bool $email_blacklist To blacklist all the contacts for email
     * @return $this
     */
    public function setEmailBlacklist($email_blacklist)
    {
        $this->container['email_blacklist'] = $email_blacklist;

        return $this;
    }

    /**
     * Gets sms_blacklist
     * @return bool
     */
    public function getSmsBlacklist()
    {
        return $this->container['sms_blacklist'];
    }

    /**
     * Sets sms_blacklist
     * @param bool $sms_blacklist To blacklist all the contacts for sms
     * @return $this
     */
    public function setSmsBlacklist($sms_blacklist)
    {
        $this->container['sms_blacklist'] = $sms_blacklist;

        return $this;
    }

    /**
     * Gets update_existing_contacts
     * @return bool
     */
    public function getUpdateExistingContacts()
    {
        return $this->container['update_existing_contacts'];
    }

    /**
     * Sets update_existing_contacts
     * @param bool $update_existing_contacts To facilitate the choice to update the existing contacts
     * @return $this
     */
    public function setUpdateExistingContacts($update_existing_contacts)
    {
        $this->container['update_existing_contacts'] = $update_existing_contacts;

        return $this;
    }

    /**
     * Gets empty_contacts_attributes
     * @return bool
     */
    public function getEmptyContactsAttributes()
    {
        return $this->container['empty_contacts_attributes'];
    }

    /**
     * Sets empty_contacts_attributes
     * @param bool $empty_contacts_attributes To facilitate the choice to erase any attribute of the existing contacts with empty value. emptyContactsAttributes = true means the empty fields in your import will erase any attribute that currently contain data in Mailvio, & emptyContactsAttributes = false means the empty fields will not affect your existing data ( only available if `updateExistingContacts` set to true )
     * @return $this
     */
    public function setEmptyContactsAttributes($empty_contacts_attributes)
    {
        $this->container['empty_contacts_attributes'] = $empty_contacts_attributes;

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


