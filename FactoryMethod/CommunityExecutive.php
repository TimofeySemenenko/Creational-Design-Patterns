<?php
declare(strict_types=1);

namespace FactoryMethod;


class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building';
    }

}