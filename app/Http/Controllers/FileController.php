<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FileController extends Controller
{
    //--------------------------------------------------------------------------------
    // File upload controller
    // 
    public function index()
    {
        return view('upload.index');
    }
    public function fileUpload(Request $request)
    {
        //file is saved on public/files
        $uploadPath = 'files/';
        $usableExtension = array("csv", "txt", "doc", "docx", "jpg", "jpeg", "png", "pdf");

        if ($request->hasFile('file'))
        {            
            if (!file_exists($uploadPath)) 
            {
                mkdir($uploadPath, 0755, true);
                echo "Folder" . $uploadPath . " created.";
            }

            $fileExtension = $request->file('file')->getClientOriginalExtension();
            if (in_array(strtolower($fileExtension), $usableExtension)) 
            {
                //rename file.extension to proper filename with slugs (filename-date-extension)
                $fileName = str_slug(Carbon::now()->toDayDateTimeString()).rand(1, 9999) . '.' . $fileExtension;
                $request->file('file')->move($uploadPath, $fileName);
            }
        }
        else
        {
            echo "If statement is not satisfied";
        }
    }
    // Controller resource methods
    public function create()
    {
        # code...
    }
    public function store(Request $request)
    {
        # code...
    }
    public function show($id)
    {
        # code...
    }
    public function edit($id)
    {
        # code...
    }
    public function update(Request $request, $id)
    {
        # code...
    }
    public function destroy($id)
    {
        # code...
    }
}
