<?php


class WebContainer56Cest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }


    public function checkConnectionWithDB55(FunctionalTester $I){
        $I->wantTo("verify mysql 5.5 container is linked with php 5.6 container properly");
        $I->runShellCommand("docker exec dev_web_56 ping db55 -c 2");
        $I->seeInShellOutput('2 packets transmitted, 2 packets received');
    }

    public function checkConnectionWithDB57(FunctionalTester $I){
        $I->wantTo("verify mysql 5.7 container is linked with php 5.6 container properly");
        $I->runShellCommand("docker exec dev_web_56 ping db57 -c 2");
        $I->seeInShellOutput('2 packets transmitted, 2 packets received');
    }

    public function checkConnectionWithDB101(FunctionalTester $I){
        $I->wantTo("verify mariadb 10.1 container is linked with php 5.6 container properly");
        $I->runShellCommand("docker exec dev_web_56 ping db101 -c 2");
        $I->seeInShellOutput('2 packets transmitted, 2 packets received');
    }
}
