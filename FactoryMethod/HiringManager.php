<?php
declare(strict_types=1);

namespace FactoryMethod;


abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }

}