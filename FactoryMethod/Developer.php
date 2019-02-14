<?php
declare(strict_types=1);

namespace FactoryMethod;


class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }

}