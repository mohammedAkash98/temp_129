<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\User;
use Mpdf\Mpdf;


class PdfController extends Controller
{
    public function userPdfReport()
    {
        $users = User::all();

        $mpdf = new \Mpdf\Mpdf();

        $html = view('backend.pdf.user-pdf-report', compact('users'))->render();

        $mpdf->WriteHTML($html);

        $mpdf->Output('user-report.pdf', 'I');
    }

    public function chapterPdfReport()
    {
        $chapters = Chapter::all();

        $mpdf = new \Mpdf\Mpdf();

        $html = view('backend.pdf.chapter-pdf-report', compact('chapters'))->render();

        $mpdf->WriteHTML($html);

        $mpdf->Output('chapter-report.pdf', 'I');
    }
}