<?php


namespace App\Services;


use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageService implements MessageServiceInterface
{

    public function createMessage(array $attributes): int
    {
        $user = Auth::user();

        $message = new Message();
        $message->name = $attributes['cName'];
        $message->email = $attributes['cEmail'];
        $message->web_site = $attributes['cWebsite'];
        $message->message = $attributes['cMessage'];
        $message->user()->associate($user);
        $message->save();
        return $message->id;
    }
}