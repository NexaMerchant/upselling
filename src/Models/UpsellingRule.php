<?php
namespace NexaMerchant\Upselling\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use NexaMerchant\Upselling\Contracts\UpsellingRule as UpsellingRuleContract;


class UpsellingRule extends Model implements UpsellingRuleContract
{

    use HasFactory;

    protected $table = 'upselling_rules';

    protected $fillable = [
        'name',
        'description',
        'conditions_type',
        'condition_value',
        'rule_type',
        'discount',
        'conditions',
    ];

    protected $casts = [
        'conditions' => 'array',
    ];
}