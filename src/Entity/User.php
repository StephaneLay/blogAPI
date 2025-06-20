<?php

namespace App\Entity;

class User
{

    private string $name;

    private string $firstname;

    private string $email;

    private ?string $profilePic;

    private ?int $id;









    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of profilePic
     *
     * @return ?string
     */
    public function getProfilePic(): ?string
    {
        return $this->profilePic;
    }

    /**
     * Set the value of profilePic
     *
     * @param ?string $profilePic
     *
     * @return self
     */
    public function setProfilePic(?string $profilePic): self
    {
        $this->profilePic = $profilePic;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function __construct(string $name,string $firstname,string $email,?string $picture = null,?int $id =  null) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->profilePic = $picture;
        $this->id = $id;
    }
}