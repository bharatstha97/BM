<?php

class XMLRemote
{

  public function __construct(
    private string $url = '',
    private $response = null
  ) {
  }

  public function setUrl(string $url)
  {
    $this->url = $url;
    return $this;
  }


  public function generateResponse()
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $this->response = curl_exec($ch);
    curl_close($ch);
    return $this;
  }

  public function getXML()
  {
    return simplexml_load_string($this->response);
  }
  public function getJson()
  {
    $xml = simplexml_load_string($this->response);

    $json = json_encode($xml, JSON_PRETTY_PRINT);
    return $json;
  }
}
