<?php
namespace App\Models;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\HtmlString;
use Throwable;

/**
 * App\Models\EmailTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $subject
 * @property string $content
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\EmailTemplate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\EmailTemplate withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\EmailTemplate withoutTrashed()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EmailTemplate whereUpdatedAt($value)
 */
class EmailTemplate extends Model implements Renderable
{
    use SoftDeletes;

    /**
     * @var array
     */
    public $viewData = [];

    protected $table = 'email_templates';
    protected $attributes = [
        'name' => 'Hello World',
        'subject' => 'Hello World Mail',
        'content' => '<h1>Hello World</h1>',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    /**
     * @param array|string $key
     * @param mixed $value
     * @return $this
     */
    public function withData($key, $value = null)
    {
        if(is_array($key)) {
            $this->viewData = array_merge($this->viewData, $key);
        } else {
            $this->viewData[$key] = $value;
        }

        return $this;
    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return array|string
     * @throws Throwable
     */
    public function render()
    {
        $rendered = view(['template' => $this->content], $this->viewData)->render();
        return ['html' => new HtmlString($rendered) ];
    }


}
