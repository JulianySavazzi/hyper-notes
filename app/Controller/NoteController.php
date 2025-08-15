<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\NoteRequest;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Swoole\Exception;

class NoteController
{
    public function index(NoteRequest $request, ResponseInterface $response)
    {
        try {
            return $response->raw('Hello Hyperf!');
        } catch (\Hyperf\Validation\ValidationException $e) {
            return $response->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->validator->errors()->toArray()
            ])->withStatus(422);
        } catch (Exception $e) {
            return $response->json(['message' => $e->getMessage()])->withStatus(400);
        }
    }

    public function show(NoteRequest $request, int $id, ResponseInterface $response)
    {
        try {
            // Implementation goes here
            return $response->json(['id' => $id]);
        } catch (\Hyperf\Validation\ValidationException $e) {
            return $response->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->validator->errors()->toArray()
            ])->withStatus(422);
        } catch (Exception $e) {
            return $response->json(['message' => $e->getMessage()])->withStatus(400);
        }
    }

    public function store(NoteRequest $request, ResponseInterface $response)
    {
        try {
            $data = $request->validated();
            return $response->json($data);
        } catch (\Hyperf\Validation\ValidationException $e) {
            return $response->json([
                'message' => 'The given data was invalid.',
                'errors' => $e->validator->errors()->toArray()
            ])->withStatus(422);
        } catch (Exception $e) {
            return $response->json(['message' => $e->getMessage()])->withStatus(400);
        }
    }

    public function update(NoteRequest $request, ResponseInterface $response)
    {

    }

    public function delete(NoteRequest $request, ResponseInterface $response)
    {

    }
}
