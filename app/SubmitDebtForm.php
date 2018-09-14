<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitDebtForm extends Model
{
    protected $fillable = ['due_date','debt_type','amount','stage','details','c_name','c_company','c_email','c_phone','d_name','d_company','d_email','d_phone'];
}
