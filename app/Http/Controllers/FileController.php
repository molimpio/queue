<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\WriteFile;

class FileController extends Controller
{
    public function index() {
        $this->dispatch(new WriteFile());
        // WriteFile::dispatch();
        return response()->json('OK');
    }
}
