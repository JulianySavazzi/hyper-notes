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
        try {
            return $response->json('Hello Hyperf!');
        } catch (\Hyperf\Validation\ValidationException $e) {
            return $response->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->validator->errors()->toArray()
            ])->withStatus(422);
        } catch (Exception $e) {
            return $response->json(['message' => $e->getMessage()])->withStatus(400);
        }
    }

    public function show(UserRequest $request, int $id, ResponseInterface $response)
    {

    }

    public function store(UserRequest $request, ResponseInterface $response)
    {
        try {
            $data = $request->validated();
            return $response->json($data)->withStatus(201);
        } catch (\Hyperf\Validation\ValidationException $e) {
            return $response->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->validator->errors()->toArray()
            ])->withStatus(422);
        } catch (Exception $e) {
            return $response->json(['message' => $e->getMessage()])->withStatus(400);
        }
    }

    public function update(UserRequest $request, ResponseInterface $response)
    {

    }

    public function delete(UserRequest $request, ResponseInterface $response)
    {

    }
}
