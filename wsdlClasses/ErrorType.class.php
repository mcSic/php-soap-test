<?php

class ErrorType
{
  public $Code;
  public $Type;
  public $_;

  /**
   * @author Maksym Kaban
   */
  public function __toString()
  { //{{{
    return sprintf("Code: %s; Type: %s; Message: %s",
                   $this->Code,
                   $this->Type,
                   $this->_);
  } //}}}

}
