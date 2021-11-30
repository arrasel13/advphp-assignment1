<?php
/**
 * Reusable Class
 */
trait Helper{
    public function calculation() {
        echo “I am doing calculation”;
    }
}
/**
 * Base Class
 */
abstract Class Human {
    public function eat() {
        echo “I am eating”;
    }
    public function sleep(){
        echo “I am sleeping”;
    }
    public function walk(){
        echo “I am walking”;
    }
}
/**
 * Interface
 */
interface student {
    public function study();
    public function giveExam();
}
/**
 * Real Human Object
 */
class Rasel extends Human implements student{
    use Helper;
    public function study() {
        echo “I am studying\n”;
    }
    public function giveExam()
    {
        echo “I am giving exams\n”;
    }
}
$obj1 = new Rasel();
$obj1->study();
$obj1->giveExam();
$obj1->calculation();