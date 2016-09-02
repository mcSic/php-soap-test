<?php

/**
 * Class UniqueIDType
 * @author Evgen Pianykh
 */

class UniqueIDType
{
  public $ID;
  public $Type;
  public $_;

  /**
   * @author Maksym Kaban
   */
  public function __toString()
  { //{{{
    return sprintf("ID: %s; Type: %s; Message: %s",
                   $this->ID,
                   $this->Type,
                   $this->_);
  } //}}}

}
