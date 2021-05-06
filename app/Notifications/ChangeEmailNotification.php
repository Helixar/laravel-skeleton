<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class ChangeEmailNotification extends Notification
{
    use Queueable;

    /**
     * @var string
     */
    protected $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(Lang::get('Claire Gindre - Changement de votre email'))
            ->line(Lang::get('Veuillez cliquer sur le bouton ci-dessous afin de mettre à jour votre adresse email'))
            ->action(Lang::get('Vérifier mon email'), $this->verifyRoute($notifiable))
            ->line(Lang::get("Si vous n'avez pas créé de compte veuillez ne pas tenir compte de cet email."));
    }

    /**
     * Returns the Reset URl to send in the Email
     *
     * @param AnonymousNotifiable $notifiable
     * @return string
     */
    protected function verifyRoute($notifiable): string
    {
        return URL::temporarySignedRoute('email.verify', 60 * 60, [
            'id' => $notifiable->getKey(),
            'email' => $this->email,
            'hash' => sha1($notifiable->getEmailForVerification()),
        ]);
    }
}
