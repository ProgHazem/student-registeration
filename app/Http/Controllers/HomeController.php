<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Department;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'programs', 'contact']);
    }

    public function index()
    {
        return view('homepage');
    }

    public function programs(Request $request, $slug)
    {
        return view("programs.$slug");
    }

    public function formRegisterStudent()
    {
        return view('admin.register_student');
    }

    public function registerStudent(Request $request) {
        $v = Validator::make($request->all(), [
            'email' => 'required|unique:users|email',
            'national_number' => ['required', 'unique:users', 'regex:/(2|3)[0-9][1-9][0-1][1-9][0-3][1-9](01|02|03|04|11|12|13|14|15|16|17|18|19|21|22|23|24|25|26|27|28|29|31|32|33|34|35|88)\d\d\d\d\d/i'],        
            'name' => 'required|string',
            'grade' => 'required|numeric|min:370|max:410',
            'gender' => 'required|in:Male,Female',
            'phone_number' => ['required','regex:/(01)[0|1|2|5][0-9]{8}/i'],
            'password' => 'required|min:10|max:20',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'], 
            'admin_password' => $data['password'], 
            'password' => bcrypt($data['password']), 
            'national_number' => $data['national_number'], 
            'gender' => $data['gender'],
            'grade' => $data['grade'], 
            'phone' => $data['phone_number'],
        ]);
        if($user) {
            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=> $user->name, 'email' => $user->email, 'national_number' => $user->national_number, 'password' => $user->admin_password);
            Mail::send('emails.student_email', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Login to FCI');
                // $message->from('Fox','Register Account');
            });
        }
        return redirect()->route('admin.home');
    }
    
    public function adminHome()
    {
        $students = User::with('department')->where('user_type', 'student')->where('certification', '!=', 'null')->get();
        return view('admin.home', ['students' => $students]);
    }

    public function contact(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $data = $request->all();
        $to_name = "FCI Banha";
        $to_email = env('MAIL_USERNAME');
        $data = array('name'=> $data['name'], 'email' => $data['email'], 'subject' => $data['subject'], 'messages' => strip_tags($data['message']));
        Mail::send('emails.contact', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('contact to FCI');
        });
        return redirect()->back();
    }

    public function sendReselt(Request $request)
    {
        $ids = $request->id;
        for($i=0; $i < count($ids); $i++ )
        {
            $student = User::where('id', $ids[$i])->first();
            if($student) {
                $to_name = $student->name;
                $to_email = $student->email;
                $data = array('name'=> $student->name, 'email' => $student->email, 'national_number' => $student->national_number, 'password' => $student->admin_password, "department" => $student->department->name);
                Mail::send('emails.result_email', $data, function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)
                    ->subject('Result for registeration Department');
                    // $message->from('Fox','Register Account');
                });
            }
            
        }
        return response()->json(["success" => "Sending Result successfully"], 200);
    }


    public function studentDelete (Request $request, $id)
    {
        $student = User::where('id', $id)->first();
        if($student) {
            $student->delete();
        }
        return redirect()->back();
    }

    public function studentEdit (Request $request, $id) 
    {
        $student = User::where('id', $id)->first();
        return view('admin.edit_student', ['student' => $student, 'departments' => Department::all()]);
    }

    public function studentUpdate(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|email',
            'national_number' => ['required', 'regex:/(2|3)[0-9][1-9][0-1][1-9][0-3][1-9](01|02|03|04|11|12|13|14|15|16|17|18|19|21|22|23|24|25|26|27|28|29|31|32|33|34|35|88)\d\d\d\d\d/i'],        
            'name' => 'required|string',
            'grade' => 'required|numeric|min:370|max:410',
            'gender' => 'required|in:Male,Female',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
            'birthdate' => 'required|date',
            'certification' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'department_id' => 'required|integer|exists:departments,id',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $data = $request->all();
        $user =User::where('id', $id)->first();
        if($user->admin_password == $data['password']) {
            if(request()->certification) {
                $imageName = time().'.'.request()->certification->getClientOriginalExtension();
                request()->certification->move(public_path('images'), $imageName);
            }
            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'national_number' => $data['national_number'], 
                'phone' => $data['phone'],
                'grade' => $data['grade'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'birthdate' => $data['birthdate'],
                'notes' => $data['notes'],
                'certification' =>$imageName ?? $user->certification,
                'department_id' => $data['department_id'],
            ]);
        }
        return redirect()->route('admin.home');
    }
}
