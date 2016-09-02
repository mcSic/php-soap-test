<?php

class HotelNotifReport
{
  /**
   * @var HotelDescriptiveContents
   */
  public $HotelDescriptiveContents;

  /**
   * @author Maksym Kaban
   */
  public function __construct(HotelDescriptiveContents $hotelDescriptiveContents)
  { //{{{
    $this->HotelDescriptiveContents = $hotelDescriptiveContents;
  } //}}}
}