<?php

namespace App;

use App\Traits\ImageHelpersTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class FrontUser extends Model
{
    use HasFactory, ImageHelpersTrait;
    use HasRoles;

    protected $table='front_users';

    protected $guarded=['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $guard_name = 'web';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      // |--------------------------------------------------------------------------
    // | MUTATORS
    // |--------------------------------------------------------------------------
    
    /**
     * @param $value
     */
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = config('filesystems.default');
        $destination_path = "uploads/avatar";
        $sizes=[[200,140,'thumbnail'],[150,26,'line'],[360,240,'small'],[760,400,'medium']];
        $this->uploadFileToDiskWithResize($value, $attribute_name, $disk, $destination_path,$sizes);

    }
     /**
      * @return placeholder image if image by sie
      */
    public function getThumbnailImageAttribute()
    {
        if(!$this->image){
            return $this->front_image;
        }
        
        return $this->getThumbImage($this->image,'thumbnail');
    }
    public function getLineImageAttribute()
    {
        if(!$this->image){
            return $this->front_image;
        }
        
        return $this->getThumbImage($this->image,'line');
    }
    public function getSmallImageAttribute()
    {
        if(!$this->image){
            return $this->front_image;
        }
        return $this->getThumbImage($this->image,'small');
    }
    public function getMediumImageAttribute()
    {
        if(!$this->image){
            return $this->front_image;
        }
        return $this->getThumbImage($this->image,'medium');
    }
    public function getFrontImageAttribute()
    {
        return $this->image?asset(Storage::url($this->image)):asset('assets/img/blog_placeholder.png');
    }

}
