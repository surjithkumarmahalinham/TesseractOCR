<?php

namespace App\Http\Controllers;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo "<pre>";
        echo (new TesseractOCR( public_path('one.jpeg')))
        ->executable('C:\Program Files\Tesseract-OCR\tesseract.exe')
        ->lang('eng')
        ->run();
        echo "</pre>";
    }
}
