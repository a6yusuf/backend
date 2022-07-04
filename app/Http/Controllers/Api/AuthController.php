<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class AuthController extends Controller
{
    protected $base_url;

    public function __construct()
    {
        $this->base_url = url('');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);

        $info = [
            'success' => false,
            'token' => null,
        ];

        $user = User::where('email', $request->email )->with('projects')->first();

        if ( !empty( $user ) && Hash::check($request->password, $user->password) ) {
            $info['success'] = true;
            $token = $user->createToken( $user->id )->plainTextToken;
            return [
                'success' => true,
                'token' => $token,
                'user' => $user
            ];
        } else {
            return [
                'success' => false,
            ];
        }
    }

    public function register(Request $request) 
    {
        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);
        
        // $password = Str::random(8);
        $password = request('password');
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make($password),
            'role' => request('role'),
            'packages' => request('packages'),
            'profile_picture' => 'NA',
            'created_by' => request('created_by'),
            // 'team_id' => (isset(request('team_id')) && request('team_id') != '') ? request('team_id') : NULL
        ]);

        $token = $user->createToken( $user->id )->plainTextToken;

        // return [$user, $password];
        return [
            'success' => true,
            'token' => $token,
            'user' => $user
        ];
    }
    
    public function registerNew(Request $request) 
    {
        $request->validate([
            'email'=> 'required',
        ]);
        
        // $password = Str::random(8);
        $password = '123456';
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make($password),
            'role' => 'user',
            'packages' => request('packages'),
            'profile_picture' => 'NA',
            'created_by' => auth()->user()->id,
            'team_id' => $request->has('teamId') ? auth()->user()->id : NULL
        ]);

        return [$user, $password];
    }

    public function updateme(Request $request)
    {
        $team = auth()->user()->id;

        if($request->has('profileImg') && $request->profileImg){
            $thumbcontents = file_get_contents($request->file('profileImg'));
            $thumbName =  'profile/'. $team . time() . '.png';
            Storage::disk('public')->put($thumbName, $thumbcontents);
            $img_src = $this->base_url . '/uploads/' . $thumbName;
            $upd = DB::table('users')
                ->where('id', auth()->user()->id)
                ->update([
                    'profile_picture' => $img_src,
                ]);
        }
        if($request->has('name') && $request->name){
            $upd = DB::table('users')
                ->where('id', auth()->user()->id)
                ->update([
                    'name' => $request->name,
                ]);
        }

        return response()->json(auth()->user());

    }

    public function updatepwd(Request $request)
    {   
        $psw = Hash::make($request->password);
        $upd = DB::table('users')
                ->where('id', auth()->user()->id)
                ->update([
                    'password' => $psw,
                ]);
        return $upd;
    }

        /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

            /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $owner = User::where('id', $id)->value('created_by');
        if(auth()->user()->id === $owner || auth()->user()->role === 'admin'){
            User::find($id)->delete();
            return $id;
        }

    }

    /**
     * Get the specified resources from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myusers()
    {
        $users = User::where('created_by', auth()->user()->id)->with('projects')->get();
        return response()->json($users->toArray());

    }

    /**
     * Get the specified resources from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myteam()
    {
        $team_members = User::where('team_id', auth()->user()->id)->get();
        return response()->json($team_members->toArray());

    }

    public function allusers()
    {
        return User::with('projects')->get();
    }

    public function register_admin() 
    {
        $password = "ikeOluwa2$";
        $user = User::create([
            'name' => 'Azeez Yusuf',
            'email' => 'a6yusuf@gmail.com',
            'password' => Hash::make($password),
            'role' => 'admin',
            'packages' => json_encode(['fe']),
            'profile_picture' => 'NA',
        ]);

        return [$user, $password];
    }



}
