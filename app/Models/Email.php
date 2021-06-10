<?php


namespace App\Models;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\SendQueuedMailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * App\Models\Email
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $from_email
 * @property string $from_name
 * @property mixed $to
 * @property mixed|null $cc
 * @property mixed|null $bcc
 * @property mixed|null $view_data
 * @property int $use_template
 * @property int|null $email_template_id
 * @property string|null $content
 * @property string $send_at
 * @property string $scheduled_at
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereBcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereCc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereEmailTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereFromName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereScheduledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereSendAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereUseTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Email whereViewData($value)
 */
class Email extends Model implements Mailable
{
    use Dispatchable, InteractsWithQueue, SerializesModels;

    public $queue;
    public $queueConnection;

    protected $table = 'emails';


    protected $casts = [
        'to' => 'array',
        'cc' => 'array',
        'bcc' => 'array',
        'view_data' => 'array',
    ];

    protected $dates = [
        'send_at',
        'scheduled_at',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\App\Models\EmailTemplate
     */
    public function emailTemplate()
    {
        return $this->belongsTo(EmailTemplate::class);
    }

    /**
     * Add the sender to the message.
     *
     * @param  \Illuminate\Mail\Message  $message
     * @return $this
     */
    protected function buildFrom($message)
    {
        if (!empty($this->from_email) && !empty($this->from_name)) {
            $message->from($this->from_email, $this->from_name);
        }
        return $this;
    }

    /**
     * Add all of the recipients to the message.
     *
     * @param  \Illuminate\Mail\Message  $message
     * @return $this
     */
    protected function buildRecipients($message)
    {
        foreach (['to', 'cc', 'bcc'] as $type) {
            $recipients = collect($this->{$type});

            $recipients->each(function($recipient) use($message, $type) {
                if(array_key_exists('name', $recipient)) {
                    $message->{$type}($recipient['address'], $recipient['name']);
                    return;
                }
                $message->{$type}($recipient);
            });
//            foreach ($recipients as $recipient) {
//
//            }
        }

        return $this;
    }

    /**
     * Set the subject for the message.
     *
     * @param  \Illuminate\Mail\Message  $message
     * @return $this
     */
    protected function buildSubject($message)
    {
        $emailTemplate = $this->emailTemplate()->getResults();
        if ($emailTemplate->name) {
            $message->subject($emailTemplate->name);
        }

        return $this;
    }


    /**
     * Send the message using the given mailer.
     *
     * @param Mailer $mailer
     * @throws \Throwable
     */
    public function send(Mailer $mailer)
    {

        $viewData = [];
        if($this->view_data)
            $viewData = $this->view_data;

        if($this->use_template && $this->emailTemplate()->exists()) {
            $emailTemplate = $this->emailTemplate()->getResults();
            $mailer->send(
                $emailTemplate->withData($this->view_data)
                    ->render(),
                [],
                function($message) {
                    $this->buildFrom($message)
                        ->buildRecipients($message)
                        ->buildSubject($message);
                }
            );
        }
    }

    /**
     * Queue the given message.
     *
     * @param \Illuminate\Contracts\Queue\Factory $queue
     * @return mixed
     */
    public function queue(Queue $queue)
    {
        if ($this->scheduled_at) {
            return $this->later($this->scheduled_at, $queue);
        }

        $connection = $this->queueConnection  ? $this->queueConnection : null;
        $queueName = $this->queue ? $this->queue : null;

        return $queue->connection($connection)->pushOn(
            $queueName ?: null, new SendQueuedMailable($this)
        );
    }

    /**
     * Deliver the queued message after the given delay.
     *
     * @param \DateTimeInterface|\DateInterval|int $delay
     * @param \Illuminate\Contracts\Queue\Factory $queue
     * @return mixed
     */
    public function later($delay, Queue $queue)
    {
        $connection = $this->queueConnection ? $this->queueConnection : null;
        $queueName = $this->queue ? $this->queue : null;
        return $queue->connection($connection)->laterOn(
            $queueName ?: null, $delay, new SendQueuedMailable($this)
        );
    }
}