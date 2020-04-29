<?php
namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentsExport;

class ViewController extends Controller
{
    public function index(Request $req)
    {
        $method = $req->method();

        if ($req->isMethod('post'))
        {
            $from = $req->input('from');
            $to   = $req->input('to');
            if ($req->has('search'))
            {
                // select search
                $search = DB::select("SELECT * FROM students WHERE n_date BETWEEN '$from' AND '$to'");
                return view('import',['ViewsPage' => $search]);
            } 
            

                elseif($req->has('exportExcel')) {
                        if(!empty($req->from)){
                // select Excel
                return Excel::download(new StudentsExport($from, $to), 'Excel-reports.xlsx');
        } 

         
        else {
    //         $req->session()->flash('alert-success', 'User was successful added!');
    // return redirect()->route('student.index');
    return redirect()
    ->back()
    ->with('success', 'Your message has been sent successfully!');
        }
    
    }
        }
            else
        {
            //select all
             $ViewsPage = DB::select('SELECT * FROM students');
            return view('import',['ViewsPage' => $ViewsPage]); 

        }
    }


    
}

