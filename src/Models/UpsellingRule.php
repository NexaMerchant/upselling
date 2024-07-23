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


    public const CONDITIONS_TYPE_PRODUCT = 'product';

    public const CONDITIONS_TYPE_CATEGORY = 'category';

    public const CONDITIONS_TYPE_CART = 'cart';

    public const CONDITIONS_TYPE_QUANTITY = 'quantity';

    public const CONDITIONS_TYPE_WEIGHT = 'weight';

    public const CONDITIONS_TYPE_PRICE = 'price';

    public const CONDITIONS_TYPE_CUSTOMER = 'customer';

    public const CONDITIONS_TYPE_TIME = 'time';

    public const CONDITIONS_TYPE_DATE = 'date';

    public const CONDITIONS_TYPE_DAY = 'day';

    public const CONDITIONS_TYPE_MONTH = 'month';

    public const CONDITIONS_TYPE_YEAR = 'year'; 
    
    
    public const CONDITIONS_TYPE = [
        self::CONDITIONS_TYPE_PRODUCT => 'Product',
        self::CONDITIONS_TYPE_CATEGORY => 'Category',
        self::CONDITIONS_TYPE_CART => 'Cart',
        self::CONDITIONS_TYPE_QUANTITY => 'Quantity',
        self::CONDITIONS_TYPE_WEIGHT => 'Weight',
        self::CONDITIONS_TYPE_PRICE => 'Price',
        self::CONDITIONS_TYPE_CUSTOMER => 'Customer',
        self::CONDITIONS_TYPE_TIME => 'Time',
        self::CONDITIONS_TYPE_DATE => 'Date',
        self::CONDITIONS_TYPE_DAY => 'Day',
        self::CONDITIONS_TYPE_MONTH => 'Month',
        self::CONDITIONS_TYPE_YEAR => 'Year',
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