<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Users List';
        $data['users'] = User::get();

        return view('backend.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create New User';
        $data['perusahaans'] = Perusahaan::get();
        return view('backend.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:3|required',
            'username' => 'required|unique:users,username|alpha_dash',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required|string|min:5',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        
        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;

            // Image
            $documentPath = public_path('user/image/');

            $document = $request->file('image');
            $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();

            // check duplicate name
            $i = 1;
            while (file_exists($documentPath . $documentName)) {
                $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();
                $i++;
            }
            $document->move($documentPath, $documentName);

            $user->image = $documentName;
            $user->perusahaan_id = Auth::user()->perusahaan_id;
            $user->save();

            return redirect()->route('backend.user.index')->with('success', 'User Added Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('backend.user.index')->with('failed', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $data['page_title'] = 'Edit User';
        $data['user'] = User::where('username',$username)->first();
        return view('backend.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        $tempUser = User::where('username',$username)->select('id')->first();
        $validatedData = $request->validate([
            'name' => 'min:3|required',
            'username' => 'required|alpha_dash|unique:users,username,'.$tempUser->id,
            'email' => 'required|unique:users,email,'.$tempUser->id,
            'phone' => 'required',
            'address' => 'required',
            'image' => 'mimes:png,jpg,jpeg'
        ]);
        
        try {
            $user = User::where('username',$username)->first();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            // IF THERE WAS A PASSWORD
            if($request->password != null && $request->password == $request->password_confirm){
                $request->validate([
                    'password' => 'string|min:5|confirmed',
                    'password_confirmation' => 'string|min:5',
                ]);
                $user->password = Hash::make($request->password);
            }

            // Image
            $documentPath = public_path('user/image/');

            if ($request->file('image')) {
                $userImage = $request->file('image');
                $documentName = Str::random(20) . '.' . $userImage->getClientOriginalExtension();
                // check duplicate name
                $i = 1;
                while (file_exists($documentPath . $documentName)) {
                    $documentName = Str::random(20) . '.' . $userImage->getClientOriginalExtension();
                    $i++;
                }
                $userImage->move($documentPath, $documentName);
    
                $user->image = $documentName;
            }
            $user->perusahaan_id = Auth::user()->perusahaan_id;
            $user->save();

            return redirect()->route('backend.user.index')->with('success', 'User Edited Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('backend.user.index')->with('failed', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($username)
    {
        try {
            $user = User::where('username',$username)->first();
            // $documentPath = public_path('product/image/');
            // $document->move($documentPath, $user);
            User::destroy($user->id);
            Session::flash('success', 'User Successfully Deleted!');

            return response()->json([
                'success' => true,
                'message' => 'User successfully deleted',
            ], 200);
        } catch (\Throwable $th) {
            Session::flash('failed', $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ], 200);
        }
    }
}
