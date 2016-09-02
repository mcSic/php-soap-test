<?php

/**
 * @author Evgen Pianykh
 */
class TimeStampType
{
  /**
   * @var string
   */
  public $GenerationTime;

  /**
   * @return string
   */
  public function getGenerationTime()
  {
    return $this->GenerationTime;
  }

  /**
   * @param string $GenerationTime
   */
  public function setGenerationTime($GenerationTime)
  {
    $this->GenerationTime = $GenerationTime;
  }
}