<?php

namespace App\Controller;

use App\Repository\UserRepository;
use OldSound\RabbitMqBundle\RabbitMq\Producer;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


class UsersController extends  AbstractController
{

    public function __construct(private readonly Producer $eventProducer)
    {
    }

    #[Route('/users',methods: 'post')]
    public function createUser(Request $request,UserRepository $users): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $users->saveUser($data);

        $this->eventProducer->publish(json_encode($data));

        return $this->json(['message' => 'User created']);

    }

}