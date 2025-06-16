<?php
namespace SergeySla\PhpFirebaseCloudMessaging\Recipient;

class Topic extends Recipient
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}
