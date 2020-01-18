<?php

namespace App\Policies;

use App\Model\admin\admin;
use App\Model\user\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any posts.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(admin $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user, 1);
        /*foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id ==9) {
                    return true;
                }
            }
        }
        return false;*/
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        /*foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id ==10) {
                    return true;
                }
            }
        }
        return false;*/
        return $this->getPermission($user, 2);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        /*foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id ==11) {
                    return true;
                }
            }
        }
        return false;*/
        return $this->getPermission($user, 3);
    }


     public function tag(admin $user)
    {
        
        return $this->getPermission($user, 7);
    }

     public function category(admin $user)
    {
        
        return $this->getPermission($user, 8);
    }

    protected function getPermission($user, $p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id ==$p_id) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(User $user, Post $post)
    {
        //
    }
}
