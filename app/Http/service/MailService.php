<?php

namespace App\Http\Services;


use Illuminate\Support\Facades\Mail;

class MailService
{
    protected $defaultEmail;
    protected $defaultName;

    public function __construct()
    {
        // $default = $data['adm_setting'] = allsettings();
        $this->defaultEmail = 'e.hachibul@gmail.com';
        $this->defaultName = 'Appstick';
    }
    //return app(MailService::class)->send($mailTemplate, $data, $userEmail, $userName, $subject);
    public function send($template, $data = [], $to = '', $name = '', $subject = '')
    {
        try {
            Mail::send($template, $data, function ($message) use ($name, $to, $subject) {
                $message->to($to, $name)->subject($subject)->replyTo(
                    $this->defaultEmail, $this->defaultName
                );
                $message->from($this->defaultEmail, $this->defaultName);

            });
            return true;
        }catch (\Exception $e){
            // dd($e->getMessage().' '.$e->getLine());
            return false;
        }
    }

}
