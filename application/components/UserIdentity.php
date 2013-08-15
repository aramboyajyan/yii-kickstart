<?php

/**
 * @file
 * User authentication.
 * 
 * Uses sha1() hash by default.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */
class UserIdentity extends CUserIdentity {
	
	/**
	 * Unique user identifier.
	 */
	private $_id;

	/**
	 * Authenticate a user.
	 */
	public function authenticate() {
		$record = User::model()->findByAttributes(array('username' => $this->username));
		if($record === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if($record->password !== sha1($this->password)) {
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else {
			$this->_id = $record->uid;
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	/**
	 * Get unique identifier for the current user.
	 */
	public function getId() {
		return $this->_id;
	}

}
