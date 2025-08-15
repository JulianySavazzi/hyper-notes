<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\UserRequest;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Swoole\Exception;

class UserController
{
    public function index(UserRequest $request, ResponseInterface $response)
    {
        return $response->json('Hello Hyperf!');
    }

    public function show(UserRequest $request, int $id, ResponseInterface $response)
    {

    }

    public function store(UserRequest $request, ResponseInterface $response)
    {
        $data = $request->validated();

        try {
            return $response->json($data);
        } catch (Exception $e) {
            return $response->json($e->getMessage());
        }
    }

    public function update(UserRequest $request, ResponseInterface $response)
    {

    }

    public function delete(UserRequest $request, ResponseInterface $response)
    {

    }
}
