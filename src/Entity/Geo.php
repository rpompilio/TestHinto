<?php

namespace App\Entity;

class Geo
{

	/**
	 * @var string
	 */
	private string $lat;

	/**
	 * @var string
	 */
	private string $lng;

	/**
	 * 
	 * @return string
	 */
	public function getLat(): string
	{
		return $this->lat;
	}

	/**
	 * 
	 * @param string $lat 
	 * @return self
	 */
	public function setLat(string $lat): self
	{
		$this->lat = $lat;
		return $this;
	}


	/**
	 * 
	 * @return string
	 */
	public function getLng(): string
	{
		return $this->lng;
	}

	/**
	 * 
	 * @param string $lng 
	 * @return self
	 */
	public function setLng(string $lng): self
	{
		$this->lng = $lng;
		return $this;
	}
}