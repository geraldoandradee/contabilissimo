<?php

namespace Contabilissimo\Module\Personal\Models;

use Contabilissimo\Library\Model\BaseModel;

class CardFlag extends BaseModel
{
  private $id;
  private $description;

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
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
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
  }


}