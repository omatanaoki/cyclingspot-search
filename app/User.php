<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image','current_password', 'introduction',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
        'password', 'remember_token','current_password',
    ];
    
    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
    
    
    public function alertcomments()
    {
        return $this->hasMany(Alertcomment::class);
    }
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    public function follow($userId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_following($userId);
        // 相手が自分自身ではないかの確認
        $its_me = $this->id == $userId;
    
        if ($exist || $its_me) {
            // 既にフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->followings()->attach($userId);
            return true;
        }
    }
    
    public function unfollow($userId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_following($userId);
        // 相手が自分自身かどうかの確認
        $its_me = $this->id == $userId;
    
        if ($exist && !$its_me) {
            // 既にフォローしていればフォローを外す
            $this->followings()->detach($userId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function is_following($userId)
    {
        return $this->followings()->where('follow_id', $userId)->exists();
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Alert::class, 'favorites', 'user_id', 'alert_id')->withTimestamps();
    }
    
    public function favorited()
    {
        return $this->belongsToMany(User::class, 'favorites', 'alert_id', 'user_id')->withTimestamps();
    }
    
    public function favorite($alertId)
    {
        // 既にいいねしているかの確認
        $exist = $this->is_favorite($alertId);
    
        if ($exist) {
            // 既にいいねしていれば何もしない
            return false;
        } else {
            // 未いいねであればいいねする
            $this->favorites()->attach($alertId);
            return true;
        }
    }
    
    public function unfavorite($alertId)
    {
        // 既にいいねしているかの確認
        $exist = $this->is_favorite($alertId);
      
        if ($exist) {
            // 既にいいねしていればいいねを外す
            $this->favorites()->detach($alertId);
            return true;
        } else {
            // 未いいねであれば何もしない
            return false;
        }
    }
    
    public function is_favorite($alertId)
    {
        return $this->favorites()->where('alert_id', $alertId)->exists();
    }
}
