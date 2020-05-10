<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Department;
use Mail;
use Auth;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('CompleteMobile');
    }

    public function formComplete()
    {
        if(auth()->user()->certification) {
            return redirect()->route('home');
        }
        $departments = Department::all();
        return view('student.complete', ['departments' => $departments]);
    }

    public function Complete(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'national_number' => 'required|exists:users,national_number',        
            'name' => 'required|string|exists:users,name',
            'grade' => 'required|numeric|min:370|max:410|exists:users,grade',
            'gender' => 'required|in:Male,Female',
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required|date',
            'password' => 'required|confirmed',
            'certification' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'department_id' => 'required|integer|exists:departments,id',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $data = $request->all();
        $user = Auth::user();
        if($user->admin_password == $data['password']) {
            $imageName = time().'.'.request()->certification->getClientOriginalExtension();
            request()->certification->move(public_path('images'), $imageName);
            $user->update([
                'gender' => $data['gender'],
                'address' => $data['address'],
                'birthdate' => $data['birthdate'],
                'notes' => $data['notes'],
                'certification' =>$imageName,
                'department_id' => $data['department_id'],
            ]);
        }
        if($user) {
            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=> $user->name, 'email' => $user->email, 'national_number' => $user->national_number, 'department' => $user->department->name);
            Mail::send('emails.student_reg_email', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('You have register Your department');
            });
        }
        return redirect()->route('home');
    }

    public function CompleteMobile(Request $request)
    {
        if(auth()->user()->certification) {
            return response()->json(['faild' => 'your data already exsist'], 404);
        }
        $v = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'national_number' => 'required|exists:users,national_number',        
            'name' => 'required|string|exists:users,name',
            'grade' => 'required|numeric|min:370|max:410|exists:users,grade',
            'gender' => 'required|in:Male,Female',
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required|date',
            'password' => 'required|confirmed',
            'certification' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'department_id' => 'required|integer|exists:departments,id',
        ]);
        if ($v->fails())
        {
            return response()->json($v->errors(), 400);
        }
        $data = $request->all();
        $user = Auth::user();
        if($user->admin_password == $data['password']) {
            $imageName = time().'.'.request()->certification->getClientOriginalExtension();
            request()->certification->move(public_path('images'), $imageName);
            $user->update([
                'gender' => $data['gender'],
                'address' => $data['address'],
                'birthdate' => $data['birthdate'],
                'notes' => $data['notes'],
                'certification' =>$imageName,
                'department_id' => $data['department_id'],
            ]);
        }
        if($user) {
            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=> $user->name, 'email' => $user->email, 'national_number' => $user->national_number, 'department' => $user->department->name);
            Mail::send('emails.student_reg_email', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('You have register Your department');
            });
        }
        return response()->json(['success' => 'your data saved Waiting result'], 200);
    }

}
