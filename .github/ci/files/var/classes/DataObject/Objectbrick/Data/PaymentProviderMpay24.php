<?php

/**
 * Fields Summary:
 * - configurationKey [input]
 * - auth_OPERATION [input]
 * - auth_TID [input]
 * - auth_STATUS [input]
 * - auth_PRICE [input]
 * - auth_CURRENCY [input]
 * - auth_P_TYPE [input]
 * - auth_BRAND [input]
 * - auth_MPAYTID [input]
 * - auth_APPR_CODE [input]
 * - auth_PROFILE_STATUS [input]
 * - auth_FILTER_STATUS [input]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class PaymentProviderMpay24 extends DataObject\Objectbrick\Data\AbstractData
{
public const FIELD_CONFIGURATION_KEY = 'configurationKey';
public const FIELD_AUTH__OPERATION = 'auth_OPERATION';
public const FIELD_AUTH__TID = 'auth_TID';
public const FIELD_AUTH__STATUS = 'auth_STATUS';
public const FIELD_AUTH__PRICE = 'auth_PRICE';
public const FIELD_AUTH__CURRENCY = 'auth_CURRENCY';
public const FIELD_AUTH__P__TYPE = 'auth_P_TYPE';
public const FIELD_AUTH__BRAND = 'auth_BRAND';
public const FIELD_AUTH__MPAYTID = 'auth_MPAYTID';
public const FIELD_AUTH__APPR__CODE = 'auth_APPR_CODE';
public const FIELD_AUTH__PROFILE__STATUS = 'auth_PROFILE_STATUS';
public const FIELD_AUTH__FILTER__STATUS = 'auth_FILTER_STATUS';

protected string $type = "PaymentProviderMpay24";
protected $configurationKey;
protected $auth_OPERATION;
protected $auth_TID;
protected $auth_STATUS;
protected $auth_PRICE;
protected $auth_CURRENCY;
protected $auth_P_TYPE;
protected $auth_BRAND;
protected $auth_MPAYTID;
protected $auth_APPR_CODE;
protected $auth_PROFILE_STATUS;
protected $auth_FILTER_STATUS;


/**
* PaymentProviderMpay24 constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get configurationKey - Configuration Key
* @return string|null
*/
public function getConfigurationKey(): ?string
{
	$data = $this->configurationKey;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("configurationKey")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("configurationKey");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set configurationKey - Configuration Key
* @param string|null $configurationKey
* @return $this
*/
public function setConfigurationKey (?string $configurationKey): static
{
	$this->configurationKey = $configurationKey;

	return $this;
}

/**
* Get auth_OPERATION - OPERATION
* @return string|null
*/
public function getAuth_OPERATION(): ?string
{
	$data = $this->auth_OPERATION;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_OPERATION")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_OPERATION");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_OPERATION - OPERATION
* @param string|null $auth_OPERATION
* @return $this
*/
public function setAuth_OPERATION (?string $auth_OPERATION): static
{
	$this->auth_OPERATION = $auth_OPERATION;

	return $this;
}

/**
* Get auth_TID - TID
* @return string|null
*/
public function getAuth_TID(): ?string
{
	$data = $this->auth_TID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_TID")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_TID");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_TID - TID
* @param string|null $auth_TID
* @return $this
*/
public function setAuth_TID (?string $auth_TID): static
{
	$this->auth_TID = $auth_TID;

	return $this;
}

/**
* Get auth_STATUS - STATUS
* @return string|null
*/
public function getAuth_STATUS(): ?string
{
	$data = $this->auth_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_STATUS")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_STATUS");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_STATUS - STATUS
* @param string|null $auth_STATUS
* @return $this
*/
public function setAuth_STATUS (?string $auth_STATUS): static
{
	$this->auth_STATUS = $auth_STATUS;

	return $this;
}

/**
* Get auth_PRICE - PRICE
* @return string|null
*/
public function getAuth_PRICE(): ?string
{
	$data = $this->auth_PRICE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PRICE")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_PRICE");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_PRICE - PRICE
* @param string|null $auth_PRICE
* @return $this
*/
public function setAuth_PRICE (?string $auth_PRICE): static
{
	$this->auth_PRICE = $auth_PRICE;

	return $this;
}

/**
* Get auth_CURRENCY - CURRENCY
* @return string|null
*/
public function getAuth_CURRENCY(): ?string
{
	$data = $this->auth_CURRENCY;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_CURRENCY")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_CURRENCY");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_CURRENCY - CURRENCY
* @param string|null $auth_CURRENCY
* @return $this
*/
public function setAuth_CURRENCY (?string $auth_CURRENCY): static
{
	$this->auth_CURRENCY = $auth_CURRENCY;

	return $this;
}

/**
* Get auth_P_TYPE - P_TYPE
* @return string|null
*/
public function getAuth_P_TYPE(): ?string
{
	$data = $this->auth_P_TYPE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_P_TYPE")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_P_TYPE");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_P_TYPE - P_TYPE
* @param string|null $auth_P_TYPE
* @return $this
*/
public function setAuth_P_TYPE (?string $auth_P_TYPE): static
{
	$this->auth_P_TYPE = $auth_P_TYPE;

	return $this;
}

/**
* Get auth_BRAND - BRAND
* @return string|null
*/
public function getAuth_BRAND(): ?string
{
	$data = $this->auth_BRAND;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_BRAND")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_BRAND");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_BRAND - BRAND
* @param string|null $auth_BRAND
* @return $this
*/
public function setAuth_BRAND (?string $auth_BRAND): static
{
	$this->auth_BRAND = $auth_BRAND;

	return $this;
}

/**
* Get auth_MPAYTID - MPAYTID
* @return string|null
*/
public function getAuth_MPAYTID(): ?string
{
	$data = $this->auth_MPAYTID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_MPAYTID")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_MPAYTID");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_MPAYTID - MPAYTID
* @param string|null $auth_MPAYTID
* @return $this
*/
public function setAuth_MPAYTID (?string $auth_MPAYTID): static
{
	$this->auth_MPAYTID = $auth_MPAYTID;

	return $this;
}

/**
* Get auth_APPR_CODE - APPR_CODE
* @return string|null
*/
public function getAuth_APPR_CODE(): ?string
{
	$data = $this->auth_APPR_CODE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_APPR_CODE")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_APPR_CODE");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_APPR_CODE - APPR_CODE
* @param string|null $auth_APPR_CODE
* @return $this
*/
public function setAuth_APPR_CODE (?string $auth_APPR_CODE): static
{
	$this->auth_APPR_CODE = $auth_APPR_CODE;

	return $this;
}

/**
* Get auth_PROFILE_STATUS - PROFILE_STATUS
* @return string|null
*/
public function getAuth_PROFILE_STATUS(): ?string
{
	$data = $this->auth_PROFILE_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PROFILE_STATUS")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_PROFILE_STATUS");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_PROFILE_STATUS - PROFILE_STATUS
* @param string|null $auth_PROFILE_STATUS
* @return $this
*/
public function setAuth_PROFILE_STATUS (?string $auth_PROFILE_STATUS): static
{
	$this->auth_PROFILE_STATUS = $auth_PROFILE_STATUS;

	return $this;
}

/**
* Get auth_FILTER_STATUS - FILTER_STATUS
* @return string|null
*/
public function getAuth_FILTER_STATUS(): ?string
{
	$data = $this->auth_FILTER_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_FILTER_STATUS")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_FILTER_STATUS");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_FILTER_STATUS - FILTER_STATUS
* @param string|null $auth_FILTER_STATUS
* @return $this
*/
public function setAuth_FILTER_STATUS (?string $auth_FILTER_STATUS): static
{
	$this->auth_FILTER_STATUS = $auth_FILTER_STATUS;

	return $this;
}

}

