<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('contacts.confirm', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'body' => $request->input('body'),
        ]);;
    }

    public function store(Request $request)
    {
        // データベースに保存する処理
        $contact = new Contact();

        // 確認画面から渡されたデータを受け取る
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->body = $request->input('body');

        // データベースに保存
        $contact->save();

        return view('contacts.complete');
    }


    public function list()
    {
        // contactsテーブルから全てのデータを取得
        $contacts = Contact::all();

        // ビューに渡す
        return view('contacts.list', compact('contacts'));
    }
}
