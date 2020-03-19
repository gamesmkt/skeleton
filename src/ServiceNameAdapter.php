<?php

namespace FishpondServices\:service_namespace;

class :service_nameAdapter
{

    use CheckSupportedGameTypesTrait;

    const SUPPORTED_GAME_TYPES = [

        ];
    /**
     * @inheritdoc
     */
    public function getGameList(TypeInterface $type = null)
    {
        $this->checkSupportedGameTypes(self::SUPPORTED_GAME_TYPES,$type);

        //
    }

    /**
     * @inheritdoc
     */
    public function prepareCreatePlayer(PlayerInterface $player, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function createPlayer(PlayerInterface $player, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function getLoginUrl(PlayerInterface $player, GameInterface $game, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function logout(PlayerInterface $player, GameInterface $game, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function getBalance(PlayerInterface $player, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function prepareTransfer(TransactionInterface $transaction, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function transfer(TransactionInterface $transaction, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function getTransferRecord(TransactionInterface $transaction, Config $config)
    {
        //
    }

    /**
     * @inheritdoc
     */
    public function getRecordDetailUrl(RecordInterface $record, GameInterface $game, Config $config)
    {
        //
    }
}
