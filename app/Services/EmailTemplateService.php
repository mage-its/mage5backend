<?php
namespace App\Services;

use App\Models\EmailTemplate;
use Illuminate\Validation\ValidationException;
use PharIo\Manifest\Email;

class EmailTemplateService
{

    /**
     * @param string $name
     * @param string $subject
     * @param string $content
     * @return EmailTemplate
     * @throws \Exception
     */
    public function createOrUpdate(string $name, string $subject, string $content)
    {

         $emailTemplate = new EmailTemplate();
         $emailTemplate->name = $name;
         $emailTemplate->subject = $subject;
         $emailTemplate->content = $content;

        return $this->createOrUpdateByModel($emailTemplate);
    }

    /**
     * @param EmailTemplate $emailTemplate
     * @return EmailTemplate
     * @throws \Exception
     */
    public function createOrUpdateByModel(EmailTemplate $emailTemplate)
    {
        if(empty($emailTemplate->name))
        {
            $emailTemplate->name = "New Email " . time() . rand();
        }

        $emailTemplate->save();
        return $emailTemplate;
    }

    /**
     * @param string $name
     * @return EmailTemplate|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function getByName(string $name)
    {
        if(empty($name))
            throw new \Exception("Name cannot be empty");
        $emailTemplate = EmailTemplate::whereName($name)->firstOrFail();

        return $emailTemplate;
    }
}
