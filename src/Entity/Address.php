<?php

namespace App\Entity;

class Address
{

	/**
	 * @var string
	 */
	private string $street;

	/**
	 * @var string
	 */
	private string $suite;

	/**
	 * @var string
	 */
	private string $city;

	/**
	 * @var string
	 */
	private string $zipcode;

	private \App\Entity\Geo $geo;


	/**
	 * 
	 * @return string
	 */
	public function getStreet(): string
	{
		return $this->street;
	}

	/**
	 * 
	 * @param string $street 
	 * @return self
	 */
	public function setStreet(string $street): self
	{
		$this->street = $street;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getSuite(): string
	{
		return $this->suite;
	}

	/**
	 * 
	 * @param string $suite 
	 * @return self
	 */
	public function setSuite(string $suite): self
	{
		$this->suite = $suite;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getCity(): string
	{
		return $this->city;
	}

	/**
	 * 
	 * @param string $city 
	 * @return self
	 */
	public function setCity(string $city): self
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getZipcode(): string
	{
		return $this->zipcode;
	}

	/**
	 * 
	 * @param string $zipcode 
	 * @return self
	 */
	public function setZipcode(string $zipcode): self
	{
		$this->zipcode = $zipcode;
		return $this;
	}

	/**
	 * 
	 * @return \App\Entity\Geo
	 */
	public function getGeo(): \App\Entity\Geo
	{
		return $this->geo;
	}

	/**
	 * 
	 * @param \App\Entity\Geo $geo 
	 * @return self
	 */
	public function setGeo(\App\Entity\Geo $geo): self
	{
		$this->geo = $geo;
		return $this;
	}
}