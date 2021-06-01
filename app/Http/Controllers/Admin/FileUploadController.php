<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileUpload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request) {
        if($request->file('file')) {
            $files = FileUpload::all();
            if ($files->count() > 0) {
                $collection = $files->pluck('filename')->map(function($item)  {
                    return "public/upload/$item";
                });
                Storage::delete($collection->all());
                FileUpload::truncate();
            }

            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $filenameToStore = time() . $filename;
            $path = $file->storeAs('public/upload', $filenameToStore);

            FileUpload::create([
                'filename' => $filenameToStore,
            ]);
        } else {
            return redirect()->back()->withErrors(['message', 'Some thing went wrong! Please try again later.']);
        }

        return redirect()->back()->with('message', 'Upload succesful!');
    }

    public function download() {
        $file = FileUpload::first();
        if ($file) {
            return Storage::download("public/upload/$file->filename");
        }

        return redirect()->back();
    }
}
