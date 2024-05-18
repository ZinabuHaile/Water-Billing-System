<?php

namespace App\Policies;

use App\Models\Reading;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReadingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
          return $user->hasRole(['Manager','BillSpecialist','Reader']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Reading $reading): bool
    {
        return $user->hasRole(['Manager','BillSpecialist','Reader']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['Reader']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Reading $reading): bool
    {
         return $user->hasRole(['Reader']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Reading $reading): bool
    {
         return $user->hasRole(['Reader']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Reading $reading): bool
    {
         return $user->hasRole(['Reader']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Reading $reading): bool
    {
         return $user->hasRole(['Reader']);
    }
}
