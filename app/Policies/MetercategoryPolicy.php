<?php

namespace App\Policies;

use App\Models\Metercategory;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MetercategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
         return $user->hasRole(['Admin','Reader','CustomerService']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Metercategory $metercategory): bool
    {
         return $user->hasRole(['Admin','Reader','CustomerService']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
         return $user->hasRole(['Admin','CustomerService']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Metercategory $metercategory): bool
    {
         return $user->hasRole(['Admin','CustomerService']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Metercategory $metercategory): bool
    {
         return $user->hasRole(['Admin']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Metercategory $metercategory): bool
    {
        return $user->hasRole(['Admin']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Metercategory $metercategory): bool
    {
        return $user->hasRole(['Admin']);
    }
}
