<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    private const TOKEN = "5822497764:AAHVUD_hUrNrrZzFSXcILDpQjwIubUuftUk";
    private const CHAT_ID = "-837612376";

    /**
     * @param Request $request
     * @return string
     * Store request to database
     */

    public function store(Request $request): string
    {
        \App\Models\Request::create([
            'firstname' => $request->get('user-name'),
            'lastname' => $request->get('last-name'),
            'source' => $request->get('type'),
            'phone' => $request->get('tel'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);

        self::sendMessage($request);

        return __('messages.formSubmitted');
    }

    /**
     * @param $data
     * @return void
     * Send request to telegram
     */

    private static function sendMessage($data): void
    {
        Http::withOptions(['verify' => false])
            ->get('https://api.telegram.org/bot'
            . self::TOKEN . '/sendMessage?chat_id=' . self::CHAT_ID
            . '&parse_mode=html&text='
            . self::prepareMessage($data));
    }

    /**
     * @param $request
     * @return string
     * Preparing a message for sending
     */

    private static function prepareMessage($request): string
    {
        $contacts = '%0A' . __('messages.phone') . $request->get('tel');

        if(!empty($request->get('email'))){
            $contacts .= '%0AEmail: ' . $request->get('email');
        }

        return __('messages.newRequest') . "%0A"
            .  $request->get('type')
            . '%0A' . __('messages.name') . $request->get('user-name') . ' ' . $request->get('last-name')
            . '%0A' . __('messages.contacts') . $contacts
            . '%0A' . __('messages.messageText') . $request->get('message');
    }
}
