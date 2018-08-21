<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AddUserCest
{
    public function checkAdd(FunctionalTester $I)
    {
        $I->amOnRoute('users/add-user', ['page' => 'add-user']);
        $I->see('My Application');
        $I->seeLink('Add User');
        $I->seeLink('Show User');

        $name = 'Robert';
        $job = 'java developer';

        $I->fillField('Name',$name);
        $I->fillField('Job',$job);
        $I->click('Submit');

        $I->see('You have added the following user:');
        $I->see('Name: '.$name);
        $I->see('Job: '.$job);

    }
}