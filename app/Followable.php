<?php


namespace App;


trait Followable
{

    public function following(User $user)
    {
        //return $this->follows->contains($user);
        //Si fem el contains... que passaria si s'ha de fer respecte una query de 3000 usuaris?
        //Millor fem una query
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
//        if ($this->following($user)) {
//            return $this->unfollow($user);
//        }
//
//        return $this->follow($user);

        //El mateix que...

        $this->follows()->toggle($user);
    }
}
