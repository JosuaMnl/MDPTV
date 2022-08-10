<?php

namespace App\Policies;

use App\Models\Cooperations;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CooperationsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return in_array($user->user_levels->user_levels, ['MDP TV', 'Mitra']);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        //
        return $user->user_levels->user_levels === "MDP TV";
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->user_levels->user_levels === "Mitra";
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        //
        return $user->user_levels->user_levels === "Mitra";
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        //
        return $user->user_levels->user_levels === "Mitra";
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Cooperations $cooperations)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Cooperations $cooperations)
    {
        //
    }
}
