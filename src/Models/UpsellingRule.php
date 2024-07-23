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


    


    public const CONDITIONS_TYPE = [
        'product' => 'Product',
        'category' => 'Category',
        'cart' => 'Cart',
    ];



    public const RULE_TYPE_FIXED = 'fixed';

    public const RULE_TYPE_PERCENTAGE = 'percentage';

    public const RULE_TYPE_BUNDLE = 'bundle';

    public const RULE_TYPE_TIERED = 'tiered';

    public const RULE_TYPE_DYNAMIC = 'dynamic';

    public const RULE_TYPE = [
        self::RULE_TYPE_FIXED => 'Fixed',
        self::RULE_TYPE_PERCENTAGE => 'Percentage',
        self::RULE_TYPE_BUNDLE => 'Bundle',
        self::RULE_TYPE_TIERED => 'Tiered',
        self::RULE_TYPE_DYNAMIC => 'Dynamic',
    ];

    
    public const STATUS = [
        'active' => 1,
        'inactive' => 0,
    ];



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