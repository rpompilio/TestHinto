<?php

namespace App\Entity;

class Company
{

	/**
	 * @var string
	 */
	private string $name;

	/**
	 * @var string
	 */
	private string $catchPhrase;

	/**
	 * @var string
	 */
	private string $bs;

	/**
	 * 
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * 
	 * @param string $name 
	 * @return self
	 */
	public function setName(string $name): self
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getCatchPhrase(): string
	{
		return $this->catchPhrase;
	}

	/**
	 * 
	 * @param string $catchPhrase 
	 * @return self
	 */
	public function setCatchPhrase(string $catchPhrase): self
	{
		$this->catchPhrase = $catchPhrase;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getBs(): string
	{
		return $this->bs;
	}

	/**
	 * 
	 * @param string $bs 
	 * @return self
	 */
	public function setBs(string $bs): self
	{
		$this->bs = $bs;
		return $this;
	}
}