<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RecollMail;
use App\Mail\ProjectMail;

class SenderController extends Controller
{
    public function send_project(Request $request) {

        $data = $request->validate([
            "title" => ['string'],
            "name" => [],
            "phone" => ['required','string'],
            "file" => []
        ]);


        Mail::to(["asmi046@gmail.com", "zakaz@kartasveta.ru", "sale@lightsnab.ru"])->send(new ProjectMail($data));
        return ["Сообщение отправлено"];
    }

    public function send_consultation(Request $request) {
        $data = $request->validate([
            "phone" => ['required','string']
        ]);

        Mail::to(["asmi046@gmail.com", "zakaz@kartasveta.ru", "sale@lightsnab.ru"])->send(new RecollMail($data));


        return ["Сообщение отправлено"];
    }

    public function show_thencs() {
        return view('thencs-recoll');
    }
}
