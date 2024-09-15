<?php namespace Portal\Taro\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Card Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Card extends Model
{
    use Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_taro_cards';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public function cardSet()
    {
        return $this->belongsTo(CardSet::class);
    }
}
