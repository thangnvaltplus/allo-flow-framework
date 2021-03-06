<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\CreatedAtTrait;
use AppBundle\Entity\Traits\IdTrait;

/**
 * Message between users
 */
class Message
{
    use CreatedAtTrait;
    use IdTrait;

    /**
     * @var User
     */
    private $author;

    /**
     * @var User
     */
    private $recipient;

    /**
     * @var string
     */
    private $content;

    /**
     * @var bool
     */
    private $read;

    public function __construct()
    {
        $this->read = false;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return User
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param User $recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRead()
    {
        return $this->read;
    }

    /**
     * @param bool $read
     *
     * @return self
     */
    public function setRead($read = true)
    {
        $this->read = $read;

        return $this;
    }
}