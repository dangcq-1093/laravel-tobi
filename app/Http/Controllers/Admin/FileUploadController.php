<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileUpload;
use App\Models\Description;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request) {
        if($request->file('file')) {
            $description = Description::findOrFail($request->description_id);
            if ($description->file) {
                $filename = $description->file->filename;
                Storage::delete("public/upload/$filename");
                $description->file->delete();
            }

            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $filenameToStore = time() . $filename;
            $path = $file->storeAs('public/upload', $filenameToStore);

            $description->file()->create([
                'filename' => $filenameToStore,
            ]); 
        } else {
            return response()->json([
                'message'  => "'Some thing went wrong! Please try again later.'",
            ], 400);
        }

        return response()->json([
            'message'  => "Updated Successful!",
        ], 200);
    }

    public function download($id) {
        $file = FileUpload::findOrFail($id);
        if ($file) {
            return Storage::download("public/upload/$file->filename");
        }

        return redirect()->back();
    }

    public function index() {
        $files = FileUpload::with('description')->get();

        return view('admin.file', compact('files'));
    }

    public function delete($id) {
        $file = FileUpload::findOrFail($id);
        if ($file) {
            $filename = $file->filename;
            Storage::delete("public/upload/$filename");
            $file->delete();

            return redirect()->back()->with('message', 'Delete succesful!');
        }

        return redirect()->back()->withErrors(['message', 'Some thing went wrong! Please try again later.']);
    }
}
