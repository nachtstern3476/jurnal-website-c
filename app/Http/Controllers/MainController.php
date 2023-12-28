<?php

namespace App\Http\Controllers;

use App\Models\Journals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $journals = Journals::limit(4)->get();
        return view('pages.home', ['journals' => $journals]);
    }

    public function jurnal()
    {
        $journals = Journals::get();
        return view('pages.lists', ['journals' => $journals]);
    }

    public function detail($id)
    {
        $journal = Journals::find($id);
        if ($journal->img_upload) {
            $journal->img_upload = explode(',', $journal->img_upload);
        }

        $user = User::find($journal->user_id);

        return view('pages.detail', ['journal' => $journal, 'user' => $user]);
    }

    public function form()
    {
        return view('pages.form');
    }

    public function create_jurnal(Request $request)
    {
        $storeAttachmentFile = $request->file('attachment')->storeAs('pdf', 'public');
        $storeImageAttachmentFile = $request->file('images_attachment');
        $storeImagePath = implode(',', array_map(function ($imagefile) {
            return $imagefile->store('images', 'public');
        }, $storeImageAttachmentFile));

        $journal = Journals::create([
            'user_id' => session('id'),
            'title' => $request->input('title'),
            'no_sk' => $request->input('no_sk'),
            'description' => $request->input('description'),
            'img_upload' => $storeImagePath,
            'attachment' => $storeAttachmentFile
        ]);

        if ($journal) {
            return redirect(route('jurnal.list'))->with('success', 'Jurnal Ditambahkan');
        };

        return redirect(route('jurnal.list'))->with('error', 'Jurnal Gagal Ditambahkan');
    }

    public function download($id)
    {
        $filename = Journals::find($id)->attachment;
        $filePath = storage_path("app/$filename");
        dd($filePath);die;
        // if (!file_exists($filePath)) {
        //     abort(404);
        // }

        // return response()->download($filePath);
    }
}
