<?php

/**
 * @author Evgen Pianykh
 */
class FromRefType
{
  /**
   * @var string
   */
  public $ID;
  /**
   * @var string
   */
  public $SequenceNb;

  /**
   * @return string
   */
  public function getID()
  {
    return $this->ID;
  }

  /**
   * @param string $ID
   */
  public function setID($ID)
  {
    $this->ID = $ID;
  }

  /**
   * @return string
   */
  public function getSequenceNb()
  {
    return $this->SequenceNb;
  }

  /**
   * @param string $SequenceNb
   */
  public function setSequenceNb($SequenceNb)
  {
    $this->SequenceNb = $SequenceNb;
  }
}