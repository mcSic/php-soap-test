<?php

class NotifDetails
{
  /**
   * @var HotelNotifReport
   */
  public $HotelNotifReport;

  /**
   * @author Maksym Kaban
   */
  public function __construct(HotelNotifReport $hotelNotifReport)
  { //{{{
    $this->HotelNotifReport = $hotelNotifReport;
  } //}}}
}