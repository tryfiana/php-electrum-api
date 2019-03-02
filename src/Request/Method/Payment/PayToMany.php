<?php

namespace Electrum\Request\Method\Payment;

use Electrum\Request\AbstractMethod;
use Electrum\Request\MethodInterface;
use Electrum\Response\Exception\ElectrumResponseException;

/**
 * Return a payment request.
 * @author Pascal Krason <p.krason@padr.io>
 */
class PayToMany extends AbstractMethod implements MethodInterface
{

    /**
     * @var string
     */
    private $method = 'paytomany';

    /**
     * @param array $optional
     *
     * @return PaymentRequestResponse|null
     * @throws \Electrum\Request\Exception\BadRequestException
     * @throws \Electrum\Response\Exception\ElectrumResponseException
     */
    public function execute(array $optional = [])
    {
        $data = $this->getClient()->execute($this->method, $optional);

        return $data['hex'];
    }

}

