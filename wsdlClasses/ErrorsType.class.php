<?php

class ErrorsType
{
  public $Error;

  /**
   * @author Maksym Kaban
   */
  public function getErrorObjects()
  { //{{{
    if (is_array($this->Error))
    {
      return $this->Error;
    }
    elseif($this->Error instanceof ErrorType)
    {
      return [$this->Error];
    }
    else
    {
      return [];
    }
  } //}}}
}
