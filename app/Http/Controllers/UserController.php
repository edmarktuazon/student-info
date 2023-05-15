<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Admins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function StudentRegister(Request $request){
        $rules = [
    
            'fName' => 'required',
            'mName' => 'required',
            'lName' => 'required',
            'addr' => 'required|min:15',
            'pBirth' => 'required',
            'bDate' => 'required|date',
            'sex' => 'required',
            'nation' => 'required',
            'email' => 'required|email',
            'cNum' => 'required',            
            'lrn' => 'required',
            'gradelvl' => 'required',
            'strand' => 'required',
            'sYear' => 'required',
            'lSchool' => 'required',
            'lschoolAddr' => 'required',
            'lSyear' => 'required',
            'rCard' => 'required',
            'gMoral' => 'required',
            'bCert' => 'required',
            'parent_name' => 'required',
            'parent_addr' => 'required',
            'parent_cnum' => 'required',
            'image' => 'required|image',
            'pass' => 'required|same:cPass',
            'cPass' => 'required',
        ];
        $this->validate($request, $rules);

        $imgurl = uniqid() . '.' . $request->image->extension();  
        $request->image->move(public_path('images'), $imgurl);
        
        $rCardurl = uniqid() . '.' . $request->rCard->extension();  
        $request->rCard->move(public_path('images'), $rCardurl);
        
        $gMoralurl = uniqid() . '.' . $request->gMoral->extension();  
        $request->gMoral->move(public_path('images'), $gMoralurl);
        
        $bCerturl = uniqid() . '.' . $request->bCert->extension();  
        $request->bCert->move(public_path('images'), $bCerturl);
        
        $students_table = new Students();
        $students_table->fName = $request->fName;
        $students_table->mName = $request->mName;
        $students_table->lName = $request->lName;
        $students_table->addr = $request->addr;
        $students_table->pBirth = $request->pBirth;
        $students_table->bDate = $request->bDate;
        $students_table->sex = $request->sex;
        $students_table->nation = $request->nation;
        $students_table->email = $request->email;
        $students_table->cNum = $request->cNum;
        $students_table->lrn = $request->lrn;
        $students_table->gradelvl = $request->gradelvl;
        $students_table->strand = $request->strand;
        $students_table->sYear = $request->sYear;
        $students_table->lSchool = $request->lSchool;
        $students_table->lschoolAddr = $request->lschoolAddr;
        $students_table->lSyear = $request->lSyear;
        $students_table->rCardurl = $rCardurl;
        $students_table->gMoralurl = $gMoralurl;
        $students_table->bCerturl = $bCerturl;
        $students_table->parent_name = $request->parent_name;
        $students_table->parent_addr = $request->parent_addr;
        $students_table->parent_cnum = $request->parent_cnum;
        $students_table->imgurl = $imgurl;
        $students_table->pass = bcrypt($request->pass);
        $students_table->save();

        return view('login');
    }

    public function StudentLogin(Request $request){
        $rules = [
            'lrn' => 'required',
            'pass' => 'required',
        ];
        $this->validate($request, $rules);

        $userlogin = [
            'lrn' => $request->lrn,
            'password' => $request->pass,
        ];

        if(Auth::guard('students')->attempt($userlogin)){
            $studentinfo = DB::table('students')->where('lrn', $request->lrn)->get();
            return view('information', ['studentinfo' => $studentinfo]);
        }else{
            return redirect('/login');
        }
    }

    public function AdminRegistration(Request $request){
        $admin_table = new Admins();
        $admin_table->username = "admin";
        $admin_table->password = bcrypt("admin123");
        $admin_table->save();
    }

    public function AdminLogin(Request $request){
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $this->validate($request, $rules);

        $userlogin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::guard('admins')->attempt($userlogin)){
            $stu_table = Students::all();
            return view('student-management', compact('stu_table'));
        }else{
            return redirect('/admin/login');
        }
    }

    public function EditStudent(Request $request){
        $studentinfo = DB::table('students')->where('lrn', $request->lrn)->get();
        return view('edit', ['studentinfo' => $studentinfo]);
    }

    public function UpdateStudent(Request $request){

        $imgurl = $request->hasFile('image') ? uniqid() . '.' . $request->file('image')->extension() : null;
        $rCardurl = $request->hasFile('rCard') ? uniqid() . '.' . $request->file('rCard')->extension() : null;
        $gMoralurl = $request->hasFile('gMoral') ? uniqid() . '.' . $request->file('gMoral')->extension() : null;
        $bCerturl = $request->hasFile('bCert') ? uniqid() . '.' . $request->file('bCert')->extension() : null;
            

        $student = \App\Models\Students::findOrFail($request->student_id);
        $student->fName = $request->fName ?? $student->fName;
        $student->mName = $request->mName ?? $student->mName;
        $student->lName = $request->lName ?? $student->lName;
        $student->addr = $request->addr ?? $student->addr;
        $student->pBirth = $request->pBirth ?? $student->pBirth;
        $student->bDate = $request->bDate ?? $student->bDate;
        $student->sex = $request->sex ?? $student->sex;
        $student->nation = $request->nation ?? $student->nation;
        $student->email = $request->email ?? $student->email;
        $student->cNum = $request->cNum ?? $student->cNum;
        $student->lrn = $request->lrn ?? $student->lrn;
        $student->gradelvl = $request->gradelvl ?? $student->gradelvl;
        $student->strand = $request->strand ?? $student->strand;
        $student->sYear = $request->sYear ?? $student->sYear;
        $student->lSchool = $request->lSchool ?? $student->lSchool;
        $student->lschoolAddr = $request->lschoolAddr ?? $student->lschoolAddr;
        $student->lSyear = $request->lSyear ?? $student->lSyear;
        $student->rCardurl = $rCardurl ?? $student->rCardurl;
        $student->gMoralurl = $gMoralurl ?? $student->gMoralurl;
        $student->bCerturl = $bCerturl ?? $student->bCerturl;
        $student->parent_name = $request->parent_name ?? $student->parent_name;
        $student->parent_addr = $request->parent_addr ?? $student->parent_addr;
        $student->parent_cnum = $request->parent_cnum ?? $student->parent_cnum;
        $student->imgurl = $imgurl ?? $student->imgurl;
        if(!empty($request->pass)) {
            $student->pass = bcrypt($request->pass);
        }
        $student->save();

        $studentinfo = DB::table('students')->where('lrn', $request->lrn)->get();
        return redirect('/admin/edit/' . $request->lrn)->with('studentinfo', $studentinfo);
    }

    public function StudentLogout(){
        return redirect('/login');
    }
}
