<?php

class ShipmentInfo
{

    /**
     * @var float $NumUnits1
     */
    protected $NumUnits1 = null;

    /**
     * @var UnitOfMeasure $NumUnits1Type
     */
    protected $NumUnits1Type = null;

    /**
     * @var string $NumUnits1TypeDesc
     */
    protected $NumUnits1TypeDesc = null;

    /**
     * @var float $NumUnits2
     */
    protected $NumUnits2 = null;

    /**
     * @var UnitOfMeasure $NumUnits2Type
     */
    protected $NumUnits2Type = null;

    /**
     * @var string $NumUnits2TypeDesc
     */
    protected $NumUnits2TypeDesc = null;

    /**
     * @var float $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var float $TotalVolume
     */
    protected $TotalVolume = null;

    /**
     * @param float $NumUnits1
     * @param float $NumUnits2
     * @param float $TotalWeight
     * @param float $TotalVolume
     */
    public function __construct($NumUnits1, $NumUnits2, $TotalWeight, $TotalVolume)
    {
      $this->NumUnits1 = $NumUnits1;
      $this->NumUnits2 = $NumUnits2;
      $this->TotalWeight = $TotalWeight;
      $this->TotalVolume = $TotalVolume;
    }

    /**
     * @return float
     */
    public function getNumUnits1()
    {
      return $this->NumUnits1;
    }

    /**
     * @param float $NumUnits1
     * @return ShipmentInfo
     */
    public function setNumUnits1($NumUnits1)
    {
      $this->NumUnits1 = $NumUnits1;
      return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getNumUnits1Type()
    {
      return $this->NumUnits1Type;
    }

    /**
     * @param UnitOfMeasure $NumUnits1Type
     * @return ShipmentInfo
     */
    public function setNumUnits1Type($NumUnits1Type)
    {
      $this->NumUnits1Type = $NumUnits1Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumUnits1TypeDesc()
    {
      return $this->NumUnits1TypeDesc;
    }

    /**
     * @param string $NumUnits1TypeDesc
     * @return ShipmentInfo
     */
    public function setNumUnits1TypeDesc($NumUnits1TypeDesc)
    {
      $this->NumUnits1TypeDesc = $NumUnits1TypeDesc;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumUnits2()
    {
      return $this->NumUnits2;
    }

    /**
     * @param float $NumUnits2
     * @return ShipmentInfo
     */
    public function setNumUnits2($NumUnits2)
    {
      $this->NumUnits2 = $NumUnits2;
      return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getNumUnits2Type()
    {
      return $this->NumUnits2Type;
    }

    /**
     * @param UnitOfMeasure $NumUnits2Type
     * @return ShipmentInfo
     */
    public function setNumUnits2Type($NumUnits2Type)
    {
      $this->NumUnits2Type = $NumUnits2Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumUnits2TypeDesc()
    {
      return $this->NumUnits2TypeDesc;
    }

    /**
     * @param string $NumUnits2TypeDesc
     * @return ShipmentInfo
     */
    public function setNumUnits2TypeDesc($NumUnits2TypeDesc)
    {
      $this->NumUnits2TypeDesc = $NumUnits2TypeDesc;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param float $TotalWeight
     * @return ShipmentInfo
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalVolume()
    {
      return $this->TotalVolume;
    }

    /**
     * @param float $TotalVolume
     * @return ShipmentInfo
     */
    public function setTotalVolume($TotalVolume)
    {
      $this->TotalVolume = $TotalVolume;
      return $this;
    }

}
