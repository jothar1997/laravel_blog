<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = [
          'name','photo','codeno','price','discount','description','brand_id','subcategory_id'];

  	public function brand() //brand
    {
        return $this->belongsTo('App\Brand');
    }
    public function subcategory() //subcategory
    {
        return $this->belongsTo('App\Subcategory');
    }
}
