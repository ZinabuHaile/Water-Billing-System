<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;



class PdfController extends Controller
{
      //With ID PDF (Download PDF in Table Row Button)
    public function download(User $record){
       // dd($record);
      
        $users = User::where('id', $record->id)->get();
        $data = [
            'title' => 'Welcome to Billing System - By ID',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
       
        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('file_name_users_id_lists.pdf');
    }

   //All Data PDF (Download PDF Button)
    public function downloads(){
        
        $users = User::get();
         //dd($users);
        $data = [
            'title' => 'Welcome to Billing System - Top Action All',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
       
        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('file_name_All_users-list.pdf');
         //return $pdf->stream();
    }

      //With ID PDF (Download PDF in Table Row Button)
    public function downloadstaff(Staff $record){
        //dd($record);
      
        $staffs = Staff::where('id', $record->id)->get();
        $data = [
            'title' => 'Welcome to Billing System - By ID',
            'date' => date('m/d/Y'),
            'staffs' => $staffs
        ];
       
        $pdf = PDF::loadView('pdf.staffsPdf', $data);
        return $pdf->download('file_name_staff_id_lists.pdf');
    }

   //All Data PDF (Download PDF Button)
    public function downloadstaffs(){
        
        $staffs = Staff::get();
        // dd($staffs);
        $data = [
            'title' => 'Welcome to Billing System - Top Action All',
            'date' => date('m/d/Y'),
            'staffs' => $staffs
        ];
       
        $pdf = PDF::loadView('pdf.staffsPdf', $data);
        return $pdf->download('file_name_All_Staff-list.pdf');
         //return $pdf->stream();
    }

        //Fetch Required Data PDF (Only Download PDF Button)
    public function downloadstaffonly(){
 
    } 
}
