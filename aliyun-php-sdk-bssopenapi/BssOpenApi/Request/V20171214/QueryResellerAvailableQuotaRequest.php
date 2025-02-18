<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryResellerAvailableQuota
 *
 * @method string getItemCodes()
 * @method string getOwnerId()
 */
class QueryResellerAvailableQuotaRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'BssOpenApi',
            '2017-12-14',
            'QueryResellerAvailableQuota'
        );
    }

    /**
     * @param string $itemCodes
     *
     * @return $this
     */
    public function setItemCodes($itemCodes)
    {
        $this->requestParameters['ItemCodes'] = $itemCodes;
        $this->queryParameters['ItemCodes'] = $itemCodes;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
