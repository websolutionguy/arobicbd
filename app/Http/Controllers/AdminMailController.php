<?php

namespace App\Http\Controllers;

use App\Models\MailContact;
use Illuminate\Http\Request;

class AdminMailController extends Controller
{
    public function index()
    {
        $mails = MailContact::orderBy('id', 'desc')->paginate(10);
        return view('back.mail.index', compact('mails'));
    }
}
