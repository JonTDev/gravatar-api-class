<?php

class Gravatar
{
    protected $hash = '';
    protected $url = 'https://www.gravatar.com/avatar/';
    protected $default = '';


    /**
     * Gravatar constructor.
     *
     * @since 1.0
     */
    public function __construct()
    {}

    /**
     * This sets the email and then hashes per the Gravatar API.
     *
     * @param string $email
     * @return $this for chaining purposes.
     * @since 1.0
     */
    public function setEmail($email)
    {
        $this->setHash(md5($email));

        return $this;
    }

    /**
     * This returns the hash if it is set.
     *
     * @return string
     * @since 1.0
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * You can manually set the hash and bypass using the email method.
     *
     * @param $hash
     * @return $this
     * @since 1.0
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * If the URL option is used it will url encode it.
     * You can use the preset options from Gravatar to select default "if the requested email does not have an imagine."
     * Or you can provide a URL and pull the image from there.
     *
     * @param string $default
     * @param bool $url
     * @return $this for chaining purposes.
     * @since 1.0
     */
    public function setDefault($default, $url = false)
    {
        $this->default = ($url === false) ? $default : urlencode($default);

        return $this;
    }

    /**
     * This will create the url based on parameters provided.
     *
     * @return string
     * @since 1.0
     */
    public function __toString()
    {
        $returnMe = $this->url . $this->hash;
        if(!empty($this->default)) $returnMe .= "?d={$this->default}";

        return $returnMe;
    }
}
