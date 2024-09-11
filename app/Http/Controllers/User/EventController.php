<?php

// namespace App\Http\Controllers\User;
namespace App\Http\Controllers\User\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    $events = Event::all();
    return view('user.events.index', compact('events'));
}

}