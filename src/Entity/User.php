<?php

namespace App\Entity;

class User
{

	private int $id;

	private string $name;

	private string $username;

	private string $email;

	private \App\Entity\Address $address;

	private string $phone;

	private string $website;

	private \App\Entity\Company $company;

	private array $listaPost;

	/**
	 * 
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * 
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

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
	public function getUsername(): string
	{
		return $this->username;
	}

	/**
	 * 
	 * @param string $username 
	 * @return self
	 */
	public function setUsername(string $username): self
	{
		$this->username = $username;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * 
	 * @param string $email 
	 * @return self
	 */
	public function setEmail(string $email): self
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * 
	 * @return \App\Entity\Address
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * 
	 * @param \App\Entity\Address $address 
	 * @return self
	 */
	public function setAddress($address): self
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getPhone(): string
	{
		return $this->phone;
	}

	/**
	 * 
	 * @param string $phone 
	 * @return self
	 */
	public function setPhone(string $phone): self
	{
		$this->phone = $phone;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getWebsite(): string
	{
		return $this->website;
	}

	/**
	 * 
	 * @param string $website 
	 * @return self
	 */
	public function setWebsite(string $website): self
	{
		$this->website = $website;
		return $this;
	}

	/**
	 * 
	 * @return \App\Entity\Company
	 */
	public function getCompany(): \App\Entity\Company
	{
		return $this->company;
	}

	/**
	 * 
	 * @param \App\Entity\Company $company 
	 * @return self
	 */
	public function setCompany(\App\Entity\Company $company): self
	{
		$this->company = $company;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getListaPost(): array
	{
		return $this->listaPost;
	}

	/**
	 * @param array $listaPost 
	 * @return self
	 */
	public function setListaPost(array $listaPost): self
	{
		$this->listaPost = $listaPost;
		return $this;
	}
}