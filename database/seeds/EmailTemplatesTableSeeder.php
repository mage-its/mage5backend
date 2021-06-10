<?php

use Illuminate\Database\Seeder;
use App\Models\EmailTemplate;

class EmailTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emailTemplate = new EmailTemplate();
        $emailTemplate->name = "hello-world";
        $emailTemplate->subject = "Hello World Mail";
        $emailTemplate->content = "<h1>Hello World. Good Morning</h1>";
        $emailTemplate->save();
    }
}
