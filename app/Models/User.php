<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User extends Model
{
    protected $table = 'user';
    protected $group;

    public function setOwnGroup() {
    	$this->group = Group::find($this->group_id);
    }

    public function getGroup() {
    	return $this->group;
    }

    public function getAge() {
    	$birthDate = new \DateTime($this->birth_date);
		$now = new \DateTime();
		return $now->diff($birthDate)->format("%Y");
    }

}