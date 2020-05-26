<?php declare(strict_types=1);


namespace RdapRegistroBr;


class RdapRegistroBr
{

  private $domain;

  function __construct($domain)
  {
    $this->domain = $domain;
  }

  public function getStatus()
  {

    $url = 'https://rdap.registro.br/domain/' . $this->domain;

    try
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $json = curl_exec($ch);
      $ret = json_decode($json, true);
      curl_close($ch);
    }
    catch(\Exception $e)
    {
      return "";
    }

    return $ret['status'][0];

  }

}

