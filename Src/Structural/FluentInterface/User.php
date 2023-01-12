<?php

namespace DesignPatterns\Src\Structural\FluentInterface;

class User
{
    protected string $userName;
    protected string $workTitle;
    protected bool $status;

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function setWorkTitle(string $workTitle): void
    {
        $this->workTitle = $workTitle;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    public function __toString(): string
    {
        return "User name: $this->userName, Work title: $this->workTitle";
    }
}
