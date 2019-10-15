<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class MovieAdminShip extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post, $title)
    {
        $this -> post = $post;
        $this -> title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailview');
    }
}
