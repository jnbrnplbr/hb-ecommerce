<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Status;
use App\Brand;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_id','role_id', 'email', 'password', 'status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function watch(){
        return $this->belongsTo(Watch::class);
    }

    public function name()
    {
        return $this->belongsTo(Name::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function approveUser()
    {
        
        $role = Role::where('name','customer')->first();

        return User::where('status_id', User::approve())
                    ->where('role_id',$role->id)
                    ->get();

    }
    
    public function pendingUser()
    {
        $status = Status::where('detail','pending')->first();
        $role = Role::where('name','customer')->first();

        return User::where('status_id',$status->id)
                    ->where('role_id',$role->id)
                    ->get();

    }

    public function deniedUser()
    {
        
        $role = Role::where('name','customer')->first();
        return User::where('status_id', User::denied())
                    ->where('role_id',$role->id)
                    ->get();
    }

    public function approve()
    {
        $status = Status::where('detail','approved')->first();
        return $status->id;
    }
    

    public function denied()
    {
        $status = Status::where('detail','denied')->first();
        return $status->id;
    }

    public function currentUser()
    {
        $user = Auth::user();
        $user = $user->name->first.' '.$user->name->last;
        return $user;
    }

    public function getCurrentRole()
    {
        $role = Auth::user();
        $role = $role->role->name;
        return $role;
    }

    public function brandList()
    {
        $brands = Brand::all();
        return $brands;
    }
}
