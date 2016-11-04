<?php

namespace AppBundle\Entity;

/**
 * Just a basic user implementation for doctrine mapping
 *
 * @Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @Table(
name="app_user",
uniqueConstraints={
@UniqueConstraint(name="token_idx", columns={"token"}),
@UniqueConstraint(name="email_idx", columns={"email"})
}
)
 */
class User
{
    /**
     * @Column(type="integer", length=10)
     * @Id
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", length=100)
     */
    private $firstname;

    /**
     * @Column(type="string", length=100)
     */
    private $lastname;

    /**
     * @Column(type="string", length=100)
     */
    private $email;

    /**
     * @Column(type="text", nullable=TRUE)
     */
    private $description;

    /**
     * @Column(type="string", length=256)
     */
    private $token;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
