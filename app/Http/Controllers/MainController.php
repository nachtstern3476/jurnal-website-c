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
        if ($journal->attachment) {
            $journal->attachment = Storage::disk('public')->url($journal->attachment);
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
        $storeAttachmentFile = $request->file('attachment')->store('public');
        $journal = Journals::create([
            'user_id' => session('id'),
            'title' => $request->input('title'),
            'no_sk' => $request->input('no_sk'),
            'description' => $request->input('description'),
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
        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }
}
