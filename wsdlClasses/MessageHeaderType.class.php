<?php

/**
 * Class MessageHeaderType
 * @author Evgen Pianykh
 */
class MessageHeaderType
{
  /**
   * @var string
   */
  public $ResponseRequested;
  /**
   * @var string
   */
  public $Terminate;
  /**
   * @var string
   */
  public $Reverse;
  /**
   * @var string
   */
  public $id;

  /**
   * @var string
   */
  public $version;
  /**
   * @var string
   */
  public $From;
  /**
   * @var string
   */
  public $To;
  /**
   * @var TimeStampType
   */
  public $TimeStamp;
  /**
   * @var FromRefType
   */
  public $FromRef;
  /**
   * @var HmsServiceType
   */
  public $Service;

  /**
   * @return string
   */
  public function getResponseRequested()
  {
    return $this->ResponseRequested;
  }

  /**
   * @param string $ResponseRequested
   */
  public function setResponseRequested($ResponseRequested)
  {
    $this->ResponseRequested = $ResponseRequested;
  }

  /**
   * @return string
   */
  public function getTerminate()
  {
    return $this->Terminate;
  }

  /**
   * @param string $Terminate
   */
  public function setTerminate($Terminate)
  {
    $this->Terminate = $Terminate;
  }

  /**
   * @return string
   */
  public function getReverse()
  {
    return $this->Reverse;
  }

  /**
   * @param string $Reverse
   */
  public function setReverse($Reverse)
  {
    $this->Reverse = $Reverse;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }

  /**
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }

  /**
   * @return string
   */
  public function getFrom()
  {
    return $this->From;
  }

  /**
   * @param string $From
   */
  public function setFrom($From)
  {
    $this->From = $From;
  }

  /**
   * @return string
   */
  public function getTo()
  {
    return $this->To;
  }

  /**
   * @param string $To
   */
  public function setTo($To)
  {
    $this->To = $To;
  }

  /**
   * @return TimeStampType
   */
  public function getTimeStamp()
  {
    return $this->TimeStamp;
  }

  /**
   * @param TimeStampType $TimeStamp
   */
  public function setTimeStamp($TimeStamp)
  {
    $this->TimeStamp = $TimeStamp;
  }

  /**
   * @return FromRefType
   */
  public function getFromRef()
  {
    return $this->FromRef;
  }

  /**
   * @param FromRefType $FromRef
   */
  public function setFromRef($FromRef)
  {
    $this->FromRef = $FromRef;
  }

  /**
   * @return HmsServiceType
   */
  public function getService()
  {
    return $this->Service;
  }

  /**
   * @param HmsServiceType $Service
   */
  public function setService($Service)
  {
    $this->Service = $Service;
  }

}