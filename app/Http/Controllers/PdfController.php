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

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'autoScriptToLang' => true,
            'autoLangToFont' => true,
        ]);


        $fontPath = public_path('fonts/pdf_font.ttf');


        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->SetFont('customfont', '', 12);
        $mpdf->fontdata['customfont'] = [
            'R' => $fontPath,
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ];


        $html = view('backend.pdf.user-pdf-report', compact('users'))->render();

        $mpdf->WriteHTML($html);

        $mpdf->Output('user-report.pdf', 'I');
    }

    public function chapterPdfReport()
    {
        $chapters = Chapter::all();


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'autoScriptToLang' => true,
            'autoLangToFont' => true,
        ]);


        $fontPath = public_path('fonts/pdf_font.ttf');


        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->SetFont('customfont', '', 12);
        $mpdf->fontdata['customfont'] = [
            'R' => $fontPath,
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ];

        $html = view('backend.pdf.chapter-pdf-report', compact('chapters'))->render();


        $mpdf->WriteHTML($html);

        $mpdf->Output('chapter-report.pdf', 'I');
    }


    public function studentPdfCertificate()
    {


        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'autoScriptToLang' => true,
            'autoLangToFont' => true,
        ]);


        $fontPath = public_path('fonts/pdf_font.ttf');


        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->SetFont('customfont', '', 12);
        $mpdf->fontdata['customfont'] = [
            'R' => $fontPath,
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ];

        $html = view('frontend.pdf.student-pdf-certificate')->render();


        $mpdf->WriteHTML($html);

        $mpdf->Output('student-certificate.pdf', 'I');
    }
}
