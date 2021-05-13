<?php
echo "Multiple inheritance refers to the mechanism by which a subclass may be descended from more than one super-class.\n";
echo "It has the advantage of allowing a class to inherit the features of more than one base class, but it has the downside of causing a lot of confusion when two base classes enforce the same method with the same name.\n\n";
trait index1
{
	public function t1()
	{
		echo "Hi, I am Piseth";
	}
}
trait index2
{
	public function t2()
	{
		echo "How about you ?";
	}
}
class Test
{
	use index1;
	use index2;
	public function index1_2()
	{
		echo "\nHi, I am Piseth How about you?";
	}
}
$test = new Test();
$test->t1();
$test->t2();
$test->index1_2();
