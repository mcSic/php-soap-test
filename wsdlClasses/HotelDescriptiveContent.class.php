<?php

class HotelDescriptiveContent
{
  /**
   * @var string
   */
  public $HotelCode;
  /**
   * @var string
   */
  public $HotelCodeContext;

  /**
   * @author Maksym Kaban
   * @param string $hotelCode
   * @param string $hotelCodeContext
   */
  public function __construct($hotelCode, $hotelCodeContext)
  { //{{{
    $this->HotelCode = $hotelCode;
    $this->HotelCodeContext = $hotelCodeContext;
  } //}}}

}