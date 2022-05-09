<?php


namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Command
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var ArrayCollection
     */
    private $gifs;
    /**
     * @var float
     */
    private $netPrice;

    /**
     * @var float
     */
    private $includingTaxes;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $validationDate;

    /**
     * @var string
     */
    private $commandNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return ArrayCollection
     */
    public function getGifs(): ArrayCollection
    {
        return $this->gifs;
    }

    /**
     * @param ArrayCollection $gifs
     */
    public function setGifs(ArrayCollection $gifs): void
    {
        $this->gifs = $gifs;
    }

    /**
     * @param Gif $gif
     */
    public function addGif(Gif $gif): void
    {
        $this->gifs->add($gif);
    }

    /**
     * @return float
     */
    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    /**
     * @param float $netPrice
     */
    public function setNetPrice(float $netPrice): void
    {
        $this->netPrice = $netPrice;
    }

    /**
     * @return float
     */
    public function getIncludingTaxes(): float
    {
        return $this->includingTaxes;
    }

    /**
     * @param float $includingTaxes
     */
    public function setIncludingTaxes(float $includingTaxes): void
    {
        $this->includingTaxes = $includingTaxes;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate(\DateTime $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return \DateTime
     */
    public function getValidationDate(): \DateTime
    {
        return $this->validationDate;
    }

    /**
     * @param \DateTime $validationDate
     */
    public function setValidationDate(\DateTime $validationDate): void
    {
        $this->validationDate = $validationDate;
    }

    /**
     * @return string
     */
    public function getCommandNumber(): string
    {
        return $this->commandNumber;
    }

    /**
     * @param string $commandNumber
     */
    public function setCommandNumber(string $commandNumber): void
    {
        $this->commandNumber = $commandNumber;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}