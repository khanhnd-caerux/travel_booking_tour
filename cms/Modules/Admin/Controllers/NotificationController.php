<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Check for new notifications
     */
    public function checkNotification(Request $request)
    {
        $notification = \Cache::get('latest_notification');
        
        if ($notification) {
            return response()->json([
                'success' => true,
                'notification' => $notification
            ]);
        }

        return response()->json([
            'success' => false,
            'notification' => null
        ]);
    }
}

