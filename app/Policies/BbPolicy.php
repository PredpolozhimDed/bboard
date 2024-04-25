<?php

namespace App\Policies;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BbPolicy
{
//NOTES вот тут не понял , что и за чем?


//    use HandlesAuthorization;
//
//    /**
//     * Create a new policy instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //
//    }

    public function update(User $user, Bb $bb)
    {
        return $bb->user->id === $user->id;
    }

    public function destroy(User $user, Bb $bb)
    {
        return $this->update($user, $bb);
    }
}
