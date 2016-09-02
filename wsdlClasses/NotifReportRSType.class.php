<?php

class NotifReportRSType
{
  public $Success;
  public $Errors;
  public $Warnings;

  /**
   * @author Maksym Kaban
   */
  public function setSuccess(SuccessType $success)
  { //{{{
    $this->Success = $success;
    return $this;
  } //}}}

  public function setErrors(ErrorsType $errors)
  {
    $this->Errors = $errors;
  }

  public function setWarnings(WarningsType $warnings)
  {
    $this->Warnings = $warnings;
  }
}