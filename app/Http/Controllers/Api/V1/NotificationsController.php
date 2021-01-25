<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\Api\V1\NotificationResource;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        $notifications = $request->user()->notifications()->paginate();

        return NotificationResource::collection($notifications);
    }
}