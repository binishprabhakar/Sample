<?php

abstract class A {

    abstract public function test();
}

class B extends A {

    public function test() {
        echo 'A';
    }

}

$obj = new B;

//$obj->test();


interface intA {

    public function A1();

    public function A2();

    public function A3();

    public function fun1();
}

interface intB {

    public function B1();

    public function B2();

    public function B3();

    public function fun1();
}

class child implements intA, intB {

    public function A1() {
        echo 'A1';
    }

    public function A2() {
        echo 'A2';
    }

    public function A3() {
        echo 'A3';
    }

    public function B1() {
        echo 'B1';
    }

    public function B2() {
        echo 'B2';
    }

    public function B3() {
        echo 'B3';
    }

    public function fun1() {
        echo 'Function';
    }

}

$child = new child;

//$child ->fun1();

trait traitA {

    public function A1() {
        echo 'A1';
    }

    public function A2() {
        echo 'A2';
    }

}

trait traitB {

    public function A1() {
        echo 'Same';
    }

    public function B1() {
        echo 'B1';
    }

    public function B2() {
        echo 'B2';
    }

}

class traitExample {

    use traitA,
        traitB {
        traitA::A1 insteadof traitB;
    }
}

$traitExample = new traitExample;

$traitExample->A1();
?>
<html>
    <head>
        <script type="text/javascript">
            console.log(a);
            // var a=10;
        </script>
    </head>
</html>