<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        //  \Yii::$app->homeUrl
        $I->amOnPage('/');
        $I->see('My Application');
        $I->seeLink('Show User');
        $I->click('Show User');
        $I->see('Your results:');
        $I->seeLink('Add User');
        $I->click('Add User');
    }
}