<?php

namespace App\Twig\Components;

use App\Repository\UserRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent()]
class UserCount
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function getUserCount(): string
    {
        return $this->userRepository->count([]);
    }
}
