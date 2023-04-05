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


        Mail::to(["asmi046@gmail.com", "zakaz@lightsnab.ru", "sale@lightsnab.ru"])->send(new ProjectMail($data));
        return ["Сообщение отправлено"];
    }

    public function send_consultation(Request $request) {
        $data = $request->validate([
            "phone" => ['required','string']
        ]);

        // $send_adr = ["asmi046@gmail.com"];

        // if ($data['subject'] === "Покупка продукции" ) $send_adr[] = "sale@mansurovoagro.ru";
        // if ($data['subject'] === "Сотрудничество" ) $send_adr[] = "sale@mansurovoagro.ru";
        // if ($data['subject'] === "Карьера" ) $send_adr[] = "hr@mansurovoagro.ru";
        // if ($data['subject'] === "СМИ" ) $send_adr[] = "info@mansurovoagro.ru";

        // foreach ($send_adr as $adr) {
        //     Mail::to($adr)->send(new ConsultMail($data));
        // }

        Mail::to(["asmi046@gmail.com", "zakaz@lightsnab.ru", "sale@lightsnab.ru"])->send(new RecollMail($data));


        return ["Сообщение отправлено"];
    }

    public function show_thencs() {
        return view('thencs-recoll');
    }
}
