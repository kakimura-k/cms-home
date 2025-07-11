<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable
{
    use Queueable, SerializesModels;

    // プロパティを定義
    private $company,$name,$tel,$email,$birth_date,$gender,$occupation,$body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        // コンストラクタでプロパティに値を格納
        $this->company = $inputs['company'];
        $this->name = $inputs['name'];
        $this->tel = $inputs['tel'];
        $this->email = $inputs['email'];
        $this->birth_date = $inputs['birth_date'];
        $this->gender = $inputs['gender'];
        $this->occupation = $inputs['occupation'];
        $this->body = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from('example@gmail.com')
                ->subject('自動送信メール')
                ->view('contact.mail')
                ->with([
                'company' => $this->company,
                'name' => $this->name,
                'tel' => $this->tel,
                'email' => $this->email,
                'birth_date' => $this->birth_date,
                'gender' => $this->gender,
                'occupation' => $this->occupation,
                'body' => $this->body,
                ]);
    }
}
