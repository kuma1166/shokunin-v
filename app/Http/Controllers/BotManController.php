<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */

    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'Reservation' || $message == 'Schedule' || $message == 'Plan' || $message == 'Craftsman') {
                $this->askName($botman);
            } else {
                $botman->reply("Please contact the Customer Support Center.<br>Tel : 03-4109-2113<br>Mail : shokunin@support.com");
            }
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask('Okay,I understand.<br>Could you be more specific?', function (Answer $answer, $conversation) {
            $name = $answer->getText();
            $this->say('Thank you for sharing your opinion.<br>We will contact you either by phone or email.<br><br>▽Your answer<br>' .$name);

            $conversation->ask('Could you advise about your email.', function(Answer  $answer, $conversation){
                $email = $answer->getText();
                $this->say('Email : ' . $email);

                $conversation->ask('Confirm if the email is correct.<br>You can simply reply with yes or no.', function (Answer  $answer, $conversation) {
                    $confirmEmail = $answer->getText();
                    if ($answer == 'yes' || $answer == 'Yes') {
                        $this->say("Thank you for your inquiry and we will get back to you within 24 hours.");
                    }
                });
            });
        });
    }
}
