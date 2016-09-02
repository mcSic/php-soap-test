<?php

class WarningsType
{
  public $Warning;

  /**
   * @author Maksym Kaban
   */
  public function getWarningObjects()
  { //{{{
    if (is_array($this->Warning))
    {
      return $this->Warning;
    }
    elseif($this->Warning instanceof WarningType)
    {
      return [$this->Warning];
    }
    else
    {
      return [];
    }
  } //}}}

}
