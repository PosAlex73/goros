<?php namespace Portal\Taro\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * CardSet Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class CardSet extends Model
{
    use Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_taro_card_sets';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $hasMany = [
        'cards' => [Card::class, 'key' => 'set_id']
    ];

    public function getStatusLabelAttribute()
    {
        return ucfirst($this->status);
    }
}
