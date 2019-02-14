<?php
declare(strict_types=1);

namespace FactoryMethod;


class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }

}