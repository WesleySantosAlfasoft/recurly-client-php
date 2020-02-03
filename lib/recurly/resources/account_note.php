<?php
/**
 * This file is automatically created by Recurly's OpenAPI generation process
 * and thus any edits you make by hand will be lost. If you wish to make a
 * change to this file, please create a Github issue explaining the changes you
 * need and we will usher them to the appropriate places.
 */
namespace Recurly\Resources;

use Recurly\RecurlyResource;

// phpcs:disable
class AccountNote extends RecurlyResource
{
        private $_account_id;
        private $_created_at;
        private $_id;
        private $_message;
        private $_object;
        private $_user;
    
    
    /**
    * Getter method for the account_id attribute.
    *
    * @return string 
    */
    public function getAccountId(): string
    {
        return $this->_account_id;
    }

    /**
    * Setter method for the account_id attribute.
    *
    * @param string $account_id
    *
    * @return void
    */
    public function setAccountId(string $value): void
    {
        $this->_account_id = $value;
    }

    /**
    * Getter method for the created_at attribute.
    *
    * @return string 
    */
    public function getCreatedAt(): string
    {
        return $this->_created_at;
    }

    /**
    * Setter method for the created_at attribute.
    *
    * @param string $created_at
    *
    * @return void
    */
    public function setCreatedAt(string $value): void
    {
        $this->_created_at = $value;
    }

    /**
    * Getter method for the id attribute.
    *
    * @return string 
    */
    public function getId(): string
    {
        return $this->_id;
    }

    /**
    * Setter method for the id attribute.
    *
    * @param string $id
    *
    * @return void
    */
    public function setId(string $value): void
    {
        $this->_id = $value;
    }

    /**
    * Getter method for the message attribute.
    *
    * @return string 
    */
    public function getMessage(): string
    {
        return $this->_message;
    }

    /**
    * Setter method for the message attribute.
    *
    * @param string $message
    *
    * @return void
    */
    public function setMessage(string $value): void
    {
        $this->_message = $value;
    }

    /**
    * Getter method for the object attribute.
    *
    * @return string Object type
    */
    public function getObject(): string
    {
        return $this->_object;
    }

    /**
    * Setter method for the object attribute.
    *
    * @param string $object
    *
    * @return void
    */
    public function setObject(string $value): void
    {
        $this->_object = $value;
    }

    /**
    * Getter method for the user attribute.
    *
    * @return \Recurly\Resources\User 
    */
    public function getUser(): \Recurly\Resources\User
    {
        return $this->_user;
    }

    /**
    * Setter method for the user attribute.
    *
    * @param \Recurly\Resources\User $user
    *
    * @return void
    */
    public function setUser(\Recurly\Resources\User $value): void
    {
        $this->_user = $value;
    }

    /**
     * The hintArrayType method will provide type hinting for setter methods that
     * have array parameters.
     * 
     * @param string $key The property to get teh type hint for.
     * 
     * @return string The class name of the expected array type.
     */
    public static function hintArrayType($key): string
    {
        $array_hints = array(
        );
        return $array_hints[$key];
    }

}