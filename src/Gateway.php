<?php

namespace Omnipay\Square;

use Omnipay\Common\AbstractGateway;

/**
 * Square Gateway
 *
 */

class Gateway extends AbstractGateway
{

    public $square;

    public function getName()
    {
        return 'Square';
    }

    public function getDefaultParameters()
    {
        return array(
            'accessToken' => ''
        );
    }

    public function getAccessToken()
    {
        return $this->getParameter('accessToken');
    }

    public function setAccessToken($value)
    {
        return $this->setParameter('accessToken', $value);
    }

    public function getLocationId()
    {
        return $this->getParameter('locationId');
    }

    public function setLocationId($value)
    {
        return $this->setParameter('locationId', $value);
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Square\Message\WebPaymentRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Square\Message\TransactionRequest', $parameters);
    }
}
