<?php

namespace FishpondServices\:service_namespace;

use Carbon\Carbon;
use Gamesmkt\FishpondRecord\AbstractBetRecordMethod;
use Gamesmkt\FishpondRecord\BetRecordInterface;
use Gamesmkt\FishpondRecord\DisplayData;
use Gamesmkt\Fishpond\Config;

class :service_nameBetRecordMethod extends AbstractBetRecordMethod
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getCreatedAt($betRecord): Carbon
    {
        return Carbon::parse(data_get($betRecord, 'xxx'), '+08:00');
    }

    public function getUpdatedAt($betRecord): Carbon
    {
        return Carbon::parse(data_get($betRecord, 'xxx'), '+08:00');
    }

    public function getBetId($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getRoundId($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getPlayerName($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getGameCode($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getStatus($betRecord): int
    {
        return BetRecordInterface::STATUS_COMPLETED;
    }

    public function getBetAmount($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getValidBetAmount($betRecord): string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getPayment($betRecord): ?string
    {
        return data_get($betRecord, 'xxx');
    }

    public function getWinloss($betRecord): ?string
    {
        return null;
    }

    public function getDisplayData($betRecord): array
    {
        $displayData = new DisplayData($betRecord,$this->config->get('language'));

        return $displayData->toArray();
    }
}
