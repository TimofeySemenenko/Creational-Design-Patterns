<?php
declare(strict_types=1);

namespace FactoryMethod;


class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }

}