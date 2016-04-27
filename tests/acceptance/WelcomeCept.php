<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('sign in');
$I->amOnPage('/');
$I->click(' Iniciar Sesión');
$I->fillField('#customer_login_email', 'qa.team.linio@linio.com');
$I->fillField('#customer_login_password', 'test1234');
$I->click('iniciar sesión segura');
$I->see('¡Hola test!');
?>