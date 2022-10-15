<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Post type model.
 *========================================================================**/

class PostType extends Model {
    use HasFactory;

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
