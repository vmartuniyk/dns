<?php
namespace volodimir\Dns;
class DnsPlugin
{

    public function getAllDnsRecords($domain)
    {
        return dns_get_record($domain);
    }

}