<?php

namespace Contabilissimo\Module\Personal\Models;

use Contabilissimo\Library\Model\BaseModel;

class Card extends BaseModel
{
  private $id;
  private $description;
  private $flag;
  private $payDay;
  private $limit;
  private $bestDay;


  /**
   * @return int Card id.
   */
  public function getId()
  {
    return (int) $this->id;
  }

  /**
   * @param int $id Card id.
   */
  public function setId(int $id)
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return (string) $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }

  /**
   * @return CardFlag
   */
  public function getFlag()
  {
    return $this->flag;
  }

  /**
   * @param CardFlag $flag
   */
  public function setFlag(CardFlag $flag)
  {
    $this->flag = $flag;
  }

  /**
   * @return integer
   */
  public function getPayDay()
  {
    return $this->payDay;
  }

  /**
   * @param int $payDay
   */
  public function setPayDay(int $payDay)
  {
    $this->payDay = $payDay;
  }

  /**
   * @return float
   */
  public function getLimit()
  {
    return $this->limit;
  }

  /**
   * @param float $limit
   */
  public function setLimit(float $limit)
  {
    $this->limit = $limit;
  }

  /**
   * @return int
   */
  public function getBestDay()
  {
    return (int) $this->bestDay;
  }

  /**
   * @param int $bestDay
   */
  public function setBestDay(int $bestDay)
  {
    $this->bestDay = $bestDay;
  }


}