<?php

namespace volodimir\Dns\Tests;

use PHPUnit\Framework\TestCase;
use volodimir\Dns\DnsPlugin;

class InitialTest extends TestCase
{
    /** @test */
    public function my_fist_test()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function my_second_test()
    {
        $dns = new DnsPlugin();
        $data = $dns->getAllDnsRecords('gmail.com');
        $this->assertIsArray($data);

    }



}