<?php

namespace Pimcore\Model\DataObject\OnlineShopOrder;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['PaymentProviderMpay24'];


protected $PaymentProviderMpay24 = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24|null
*/
public function getPaymentProviderMpay24(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderMpay24) &&
		$this->PaymentProviderMpay24->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderMpay24;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24 $PaymentProviderMpay24
* @return $this
*/
public function setPaymentProviderMpay24(\Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24 $PaymentProviderMpay24): static
{
	$this->PaymentProviderMpay24 = $PaymentProviderMpay24;
	return $this;
}

}

