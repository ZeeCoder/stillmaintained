<?php

namespace App\Test;

enableDebug();

$I = new TestPerson($scenario);
$I->wantTo('view the home page');
$I->amOnPage('/');
$I->see('Gourmet');

disableDebug();
