<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use RdapRegistroBr\RdapRegistroBr;

final class RdapStatusTest extends TestCase
{

  public function testActiveStatus()
  {
    $t = new RdapRegistroBr("google.com.br");
    $this->assertEquals('active', $t->getStatus());
  }

  public function testInactiveStatus()
  {
    $t = new RdapRegistroBr("r48223i4ds9sn349dsm3.com.br");
    $this->assertNotEquals('active', $t->getStatus());
  }

}

