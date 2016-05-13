<?php

namespace Klsandbox\TimelineEvents;

use Illuminate\Database\Eloquent\Model;
use Klsandbox\SiteModel\Site;

/**
 * App\Models\TimelineEvent
 *
 * @property integer $site_id
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $user_id
 * @property string $controller
 * @property string $route
 * @property integer $target_id
 * @property integer $parameter_id
 * @property string $parameter_text
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereSiteId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereController($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereRoute($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereTargetId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereParameterId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TimelineEvent whereParameterText($value)
 * @mixin \Eloquent
 */
class TimelineEvent extends Model {

    use \Klsandbox\SiteModel\SiteExtensions;

    protected $fillable = ['created_at', 'user_id', 'controller', 'route', 'target_id', 'parameter_id', 'parameter_text'];

}
