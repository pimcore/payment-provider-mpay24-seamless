<?php

namespace Pimcore\Model\DataObject\OnlineShopOrder;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['PaymentProviderMpay24'];


protected $PaymentProviderPayPalSmartButton = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton|null
*/
public function getPaymentProviderPayPalSmartButton(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderPayPalSmartButton) &&
		$this->PaymentProviderPayPalSmartButton->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderPayPalSmartButton;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton $PaymentProviderPayPalSmartButton
* @return $this
*/
public function setPaymentProviderPayPalSmartButton(\Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton $PaymentProviderPayPalSmartButton): static
{
	$this->PaymentProviderPayPalSmartButton = $PaymentProviderPayPalSmartButton;
	return $this;
}

}

