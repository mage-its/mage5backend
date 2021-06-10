<?php

namespace App\Services;

use App\Models\Email;
use App\Models\EmailTemplate;
use DateTime;
use Exception;
use Illuminate\Support\Facades\Mail;

class EmailService
{

    protected $from_email;
    protected $from_name;

    public function __construct(string $from_email, $from_name)
    {
        $this->from_email = $from_email;
        $this->from_name = $from_name;
    }

    /**
     * @param string $target_email
     * @param string $target_fullname
     * @param string $email_subject
     * @param string $email_content
     * @param array $data
     * @param \DateTimeInterface|\DateInterval|int $when
     * @return Email
     * @throws Exception
     */
    public function sendWithContent(string $target_email, string $target_fullname, string $email_subject,
                                    string $email_content, array $data = [], $when = null)
    {
        $emailTemplateService = resolve(EmailTemplateService::class);
        $emailTemplate = $emailTemplateService->createOrUpdate("", $email_subject, $email_content);
        return $this->sendByEmailTemplate($target_email, $target_fullname, $emailTemplate, $when);
    }

    /**
     * @param string $target_email
     * @param string $target_fullname
     * @param EmailTemplate $emailTemplate
     * @param \DateTimeInterface|\DateInterval|int $when
     * @return Email
     */
    public function sendByEmailTemplate(string $target_email, string $target_fullname, EmailTemplate $emailTemplate,
                                        $when = null)
    {
        $email = new Email();
        $email->from_email = $this->from_email;
        $email->from_name = $this->from_name;
        $email->to = [
            [
                'address' => $target_email,
                'name' => $target_fullname,
            ]
        ];
        $email->use_template = true;
        $email->emailTemplate()->associate($emailTemplate);
        $email->scheduled_at = now();
        if($when instanceof \DateTimeInterface)
            $email->scheduled_at = $when;
        else if($when instanceof \DateInterval)
            $email->scheduled_at = now()->add($when);
        else if(is_int($when))
            $email->scheduled_at = now()->timestamp($when);

        return $this->sendByModel($email, $when);
    }

    /**
     * @param Email $email
     * @param \DateTimeInterface|\DateInterval|int $when
     * @return Email
     */
    public function sendByModel(Email $email, $when = null)
    {
        $email->save();
        if($when) {
            $email->queue = "email-send";
            $jobId = $queuedEmail = Mail::later($when, $email);
        }
        else {
            Mail::send($email);
        }
        return $email;
    }

}
