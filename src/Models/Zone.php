<?php
namespace AccessManager\Zones\Models;

use AccessManager\Base\Models\AdminBaseModel;
use AccessManager\Accounts\Models\Account;


class Zone extends AdminBaseModel {

    public $timestamps = false;
    protected $fillable = ['name',];

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

}