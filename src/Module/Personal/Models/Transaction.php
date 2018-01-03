<?php

namespace Contabilissimo\Module\Personal\Models;

use Contabilissimo\Library\Model\BaseModel;
use DateTime;

class Transaction extends BaseModel
{
  private $id;
  private $date;
  private $description;
  private $value;
  private $card;
  private $installment;
  private $installmentTotal;
  private $installmentId;
  private $datePayment;
  private $dueDate;

  /**
   * @return integer
   */
  public function getId()
  {
    return (integer) $this->id;
  }

  /**
   * @param integer $id
   */
  public function setId(integer $id)
  {
    $this->id = $id;
  }

  /**
   * @return DateTime
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * @param DateTime $date
   */
  public function setDate(DateTime $date)
  {
    $this->date = $date;
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

  /**
   * @return float
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * @param float $value
   */
  public function setValue(float $value)
  {
    $this->value = $value;
  }

  /**
   * @return Card
   */
  public function getCard()
  {
    return $this->card;
  }

  /**
   * @param Card $card
   */
  public function setCard(Card $card)
  {
    $this->card = $card;
  }

  /**
   * @return integer
   */
  public function getInstallment()
  {
    return (integer) $this->installment;
  }

  /**
   * @param integer $installment
   */
  public function setInstallment(integer $installment)
  {
    $this->installment = $installment;
  }

  /**
   * @return integer
   */
  public function getInstallmentTotal()
  {
    return (integer) $this->installmentTotal;
  }

  /**
   * @param integer $installmentTotal
   */
  public function setInstallmentTotal(integer $installmentTotal)
  {
    $this->installmentTotal = $installmentTotal;
  }

  /**
   * @return integer
   */
  public function getInstallmentId()
  {
    return $this->installmentId;
  }

  /**
   * @param integer $installmentId
   */
  public function setInstallmentId(integer $installmentId)
  {
    $this->installmentId = $installmentId;
  }

  /**
   * @return DateTime
   */
  public function getDatePayment()
  {
    return $this->datePayment;
  }

  /**
   * @param DateTime $datePayment
   */
  public function setDatePayment(DateTime $datePayment)
  {
    $this->datePayment = $datePayment;
  }

  /**
   * @return DateTime
   */
  public function getDueDate()
  {
    return $this->dueDate;
  }

  /**
   * @param DateTime $dueDate
   */
  public function setDueDate(DateTime $dueDate)
  {
    $this->dueDate = $dueDate;
  }


}