<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Tinkoff\Invest\V1\Bond;
use Tinkoff\Invest\V1\Currency;
use Tinkoff\Invest\V1\Future;
use Tinkoff\Invest\V1\Instrument;
use Tinkoff\Invest\V1\Share;

/**
 * @method Instrument getInstrumentBy(int $idType, ?string $classCode, string $id) $idType (1 - figi, 2 - ticker, 3 - Уникальный идентификатор, 0 - значение не определено)
 * @method Currency|null getCurrencyBy(int $idType, ?string $classCode, string $id)
 * @method RepeatedField getCurrencies(?int $instrumentStatus = 1)
 * @method RepeatedField getBonds(?int $instrumentStatus = 1)
 * @method Bond|null getBondBy(int $idType, ?string $classCode, string $id) $idType (1 - figi, 2 - ticker, 3 - Уникальный идентификатор, 0 - значение не определено)
 * @method RepeatedField getBondCoupons(string $instrumentId, \DateTime $from, \DateTime $to)
 * @method RepeatedField getBondEvents(\DateTime $from, \DateTime $to, string $instrumentId, int $eventType)
 * @method RepeatedField getDividends(string $instrumentId, \DateTime $from, \DateTime $to)
 * @method RepeatedField getFutures(?int $instrumentStatus = 1)
 * @method Future|null getFuturesBy(int $idType, ?string $classCode, string $id)
 * @method RepeatedField getShares(?int $instrumentStatus = 1)
 * @method Share|null getShareBy(int $idType, ?string $classCode, string $id)
 * @method RepeatedField getEtfs(?int $instrumentStatus = 1)
 * @method RepeatedField getIndicatives()
 */
class InstrumentsServiceDecorator extends BaseDecorator
{
    public function __construct(TIClient $client)
    {
        parent::__construct($client);
        $this->service = new InstrumentsService($client);
    }

    public function __call($method, $parameters)
    {
        return parent::__call($method, $parameters);
    }
}
