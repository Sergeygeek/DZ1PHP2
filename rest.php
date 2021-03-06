<?php

/*Задание №5
Что выведет? и почему?*/
/*class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); //4

// Так как переменная $x статичная, она объявляется в классе, при каждом вызове foo(), она инкрементируется в классе.
*/

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2
/*
 * Здесь уже все отрабатывает нормально, так как у каждого класса своя стаическая переменная
 * */