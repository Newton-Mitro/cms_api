<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  This is the Post model 
 *========================================================================**/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }
}
