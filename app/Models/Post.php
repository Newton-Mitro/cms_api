<?php

namespace App\Models;

use App\Models\PostType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  This is the Post model 
 *========================================================================**/

class Post extends Model {
    use HasFactory;

    protected $table = 'posts';

    public function postType() {
        return $this->belongsTo(PostType::class);
    }
}
