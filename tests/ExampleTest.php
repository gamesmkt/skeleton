<?php

namespace FishpondServices\:service_namespace\Test;

use PHPUnit\Framework\TestCase;

use FishpondServices\:service_namespace\:service_nameClient as Client;
use FishpondServices\:service_namespace\:service_nameAdapter as Adapter;
use FishpondServices\:service_namespace\:service_nameBetRecordMethod as BetRecordMethod;
class ExampleTest extends TestCase
{
    private static $client;
    private static $adapter;
    private static $player;
    private static $config;
    private static $game;
    private static $recordType;
    private static $gameType;
    private static $betRecordMethod;
    private static $payUpTransaction;
    private static $payDownTransaction;
    private static $record;

    private $credentials = [

    ];

    private static $configData = [

    ];

    protected function featureForTest()
    {
        return [
            'create_member',
            'login',
            'logout',
            'balance',
            'transfer',
            'check_transfer',
            'report',
            'gameList',
            'urlDetail',
        ];
    }

    public static function setupBefore()
    {
        self::$adapter = new Adapter(new Client(['credentials' =>self::$credentials]));

        self::$config = new Config(self::$configData);

        self::$player = self::$adapter->prepareCreatePlayer(new Player(), self::$config)['player'];

        self::$game = new Game(X,X,X,X);

        self::$payUpTransaction = new Transaction(:transfor amount);

        self::$payDownTransaction = new Transaction(:transfor amount);

        self::$recordType = new RecordType(1);

        self::$gameType = new GameType(TypeInterface::XXX);

        self::$betRecordMethod = new BetRecordMethod(self::$config);

        self::$record = new Record();
    }

     /** @test */
     public function createMember()
     {
         if (!in_array("create_member", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertArrayHasKey('player', $response);
     }

     /** @test */
     public function login()
     {
         if (!in_array("login", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertArrayHasKey('loginUrl', $response);
     }

     /** @test */
     public function logout()
     {
         if (!in_array("logout", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertTrue($response);
     }

     /** @test */
     public function balance()
     {
         if (!in_array("balance", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertArrayHasKey('balance', $response);
     }

     /** @test */
     public function transfer()
     {
         if (!in_array("transfer", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertArrayHasKey('transaction', $response);
     }

     /** @test */
     public function checkTransfer()
     {
         if (!in_array("check_transfer", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertArrayHasKey('transaction', $response);
     }
     /** @test */
     public function gameList()
     {
         if (!in_array("gameList", $this->featureForTest())) {
             $this->markTestSkipped();
         }

         $this->assertIsArray($response);
     }

     /** @test */
     public function fetchRecords()
     {
         if (!in_array("report", $this->featureForTest())) {
             $this->markTestSkipped();

         $this->assertIsArray($response);
     }
}
