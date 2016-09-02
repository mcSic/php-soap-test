<?php

class NotifReportRQType
{
  public $Success;

  public $Errors;

  public $Warnings;

  public $NotifDetails;

  public $TransactionIdentifier;

  public $UniqueID;

  /**
   * @author Maksym Kaban
   */
  public function setSuccess(SuccessType $success = null)
  { //{{{
    $this->Success = $success;
    return $this;
  } //}}}

  /**
   * @author Maksym Kaban
   */
  public function setNotifDetails(NotifDetails $notifDetails = null)
  { //{{{
    $this->NotifDetails = $notifDetails;
    return $this;
  } //}}}

  /**
   * @author Maksym Kaban
   */
  public function setTransactionIdentifier($transactionIdentifier)
  { //{{{
    $this->TransactionIdentifier = $transactionIdentifier;
    return $this;
  } //}}}

  /**
   * @author Maksym Kaban
   */
  public function getErrors()
  { //{{{
    return $this->Errors;
  } //}}}
  
  /**
   * @author Maksym Kaban
   */
  public function hasErrors()
  { //{{{
    return !empty($this->Errors);
  } //}}}

  /**
   * @author Maksym Kaban
   */
  public function hasWarnings()
  { //{{{
    return !empty($this->Warnings);
  } //}}}

  /**
   * @author Maksym Kaban
   */
  public function getWarnings()
  { //{{{
    return $this->Warnings;
  } //}}}

  /**
   * @author Evgen Pianykh
   * @param WarningsType $warnings
   * @return $this
   */
  public function setWarnings(WarningsType $warnings = null)
  {
    $this->Warnings = $warnings;
    return $this;
  }

  /**
   * @author Evgen Pianykh
   * @param ErrorsType $errors
   * @return $this
   */
  public function setErrors(ErrorsType $errors = null)
  {
    $this->Errors = $errors;
    return $this;
  }

  /**
   * @param mixed $UniqueID
   * @return NotifReportRQType
   */
  public function setUniqueID($UniqueID)
  {
    $this->UniqueID = $UniqueID;
    return $this;
  }

  /**
   * @return string
   */
  public function getUniqueID()
  {
    return $this->UniqueID;
  }

}
