<?php
namespace Upyun\Tests;
use Upyun\Signature;
use Upyun\Config;

class SignatureTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var Config;
     */
    public $config;
    
    public function setUp() {
        $this->config = new Config('bucket', 'operator', 'password');
    }

    public function testGetRestApiSign() {
        $sign = Signature::generateRestApiSignature($this->config, 'GET', '/sub', 'Wed, 29 Oct 2014 02:26:58 GMT', 0);
        $this->assertEquals('03db45e2904663c5c9305a9c6ed62af3', $sign);
    }
}