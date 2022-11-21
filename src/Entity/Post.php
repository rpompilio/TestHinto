<?php

namespace App\Entity;

class Post
{

	private int $userId;

	private int $id;

	private string $title;

	private string $body;


	/**
	 * @return int
	 */
	public function getUserId(): int
	{
		return $this->userId;
	}

	/**
	 * @param int $userId 
	 * @return self
	 */
	public function setUserId(int $userId): self
	{
		$this->userId = $userId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title 
	 * @return self
	 */
	public function setTitle(string $title): self
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBody(): string
	{
		return $this->body;
	}

	/**
	 * @param string $body 
	 * @return self
	 */
	public function setBody(string $body): self
	{
		$this->body = $body;
		return $this;
	}
}