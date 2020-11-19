<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    use HasFactory;

    /** @var array $guarded */
    protected $guarded = [];

    /** @var array $preferred */
    protected $preferred = ['Email', 'Phone'];

    /**
     * Return string representation
     * of preferred method
     *
     * @param int $method
     * @return void
     */
    public function getPreferredAttribute(int $method)
    {
        return (\array_key_exists($method, $this->preferred)) ? $this->preferred[$method] : $this->preferred[0];
    }
}
