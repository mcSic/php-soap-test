<?php

class HotelDescriptiveContents
{
  /**
   * @var HotelDescriptiveContent
   */
  public $HotelDescriptiveContent;
  /**
   * @author Maksym Kaban
   */
  public function __construct(HotelDescriptiveContent $hotelDescriptiveContent)
  { //{{{
    $this->HotelDescriptiveContent = $hotelDescriptiveContent;
  } //}}}

}