<?php

namespace App\Http\Controllers;

use App\Services\EmailService;
use App\Services\EmailTemplateService;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function testSend()
    {
        $emailService = resolve(EmailService::class);
        $emailTemplateService = resolve(EmailTemplateService::class);
        $emailTemplate = $emailTemplateService->getByName("hello-world");
        $emailService->sendByEmailTemplate("candra.kharista@gmail.com", "Candra Kharista Putra", $emailTemplate);
        return dd($emailService);
    }

    public function testQueue()
    {
        $emailService = resolve(EmailService::class);
        $emailTemplateService = resolve(EmailTemplateService::class);
        $emailTemplate = $emailTemplateService->getByName("hello-world");
        $emailService->sendByEmailTemplate("candra.kharista@gmail.com", "Candra Kharista Putra", $emailTemplate, now()->addSeconds(10));
        return dd($emailService);
    }

}
