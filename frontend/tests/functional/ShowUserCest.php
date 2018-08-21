<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class ShowUserCest
{
    public function checkShow(FunctionalTester $I)
    {
        $I->amOnRoute('users/show-user', ['page' => 'show-user']);
        $I->see('My Application');
        $I->seeLink('Add User');

        $I->fillField('input[type="text"]','4');
        $I->click('Submit');
        $I->see('Your results:');
        $I->see('First name: Byron');
        $I->see('Last name: Fields');

        $I->fillField('input[type="text"]','3');
        $I->click('Submit');
        $I->see('Your results:');
        $I->see('First name: Michael');
        $I->see('Last name: Lawson');

        $I->fillField('input[type="text"]','2');
        $I->click('Submit');
        $I->see('Your results:');
        $I->see('First name: Eve');
        $I->see('Last name: Holt');

        $I->fillField('input[type="text"]','1');
        $I->click('Submit');
        $I->see('Your results:');
        $I->see('First name: George');
        $I->see('Last name: Bluth');

    }
}