<?php namespace Portal\Taro\Models;

use Model;

/**
 * CardSet Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class CardSet extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'portal_taro_card_sets';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
