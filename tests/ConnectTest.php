<?php
/**
 * Created by PhpStorm.
 * User: andanyang
 * Date: 2019-04-29
 * Time: 15:37
 */

namespace tests;

use PHPUnit\Framework\TestCase;

use Server\Connect;


class ConnectTest extends TestCase
{
    public function setUp() { }

    public function tearDown() { }

    public function testConnectionIsValid()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj    = new Connect();
        $serverName = 'www.baidu.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}