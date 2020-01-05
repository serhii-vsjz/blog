<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function create(Request $request)
    {
        $postMessage = $request->all();
        $this->messageService->createMessage($postMessage);
        return redirect(route('contact'));
    }
}
