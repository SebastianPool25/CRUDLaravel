<?php

namespace App\Policies;

use App\Models\Cornellnote;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CornellnotePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return True;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Cornellnote $cornellnote): bool
    {
        return $user->id === $cornellnote->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return True;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cornellnote $cornellnote): bool
    {
        return $user->id===$cornellnote->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Cornellnote $cornellnote): bool
    {
        return $user->id===$cornellnote->user_id;
    }

}