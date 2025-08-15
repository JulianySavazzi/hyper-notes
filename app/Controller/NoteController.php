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
        return $response->raw('Hello Hyperf!');
    }

    public function show(NoteRequest $request, int $id, ResponseInterface $response)
    {

    }

    public function store(NoteRequest $request, ResponseInterface $response)
    {
        $data = $request->validated();

        try {
            return $response->json($data);
        } catch (Exception $e) {
            return $response->json($e->getMessage());
        }
    }

    public function update(NoteRequest $request, ResponseInterface $response)
    {

    }

    public function delete(NoteRequest $request, ResponseInterface $response)
    {

    }
}
