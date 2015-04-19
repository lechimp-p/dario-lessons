# Examination ftw 

So now we have some stubs for our domain classes and some interface definitions.
For our further progress we'll use a development strategy that is called Test
Driven Development or TDD for insiders. As i'm no expert in terminology regarding
software testing, and there seems to be a lot of terminology in it, i might not
use some terms in a common way. Like always i'll rather try to share some of my
understanding and mental model of that stuff then accurately explaining 
terminology.

Then, testing... On the one hand, you virtually do it always, as you run the 
code you wrote most certainly. On the other hand, how many bad software did
you see? Testing your software is very, very, very, (...) important, if you 
want to build something that should actually be usable for someone. There's an
old saying, stating that a good tester is worth it's weight ten times in gold.

Manual testing still plays an important role in software development and will
forever be required (bold statement, challenge me some other time). But as
processor cycles are cheap these days, a lot of testing is done automated, by
software, testing other software. This is not only cheaper (and less annoying
regarding the repetitive testing tasks) but also could offer a more direct 
feedback to the software developers. When writing or changing code, you could
run automated tests to check your changes in a high frequency and be sure that
you did not destroy anything that was working before. If you'ld only rely on
manual tests there could be ages passing until your code get's tested (and bugs
are discovered).

In a sense, testing already starts at the language level. Your interpreter or
compiler tries to parse your program and finds syntax errors. So you're sure, that
at least there are no mistakes in your syntax. A language with a type system 
provides further checks at compile time. Although dynamic typing in python was
a relief after years of C and C++ for me, i really appreciate the kind of
certainty haskells type system gives me when my program compiles. Be sure that you
know which guarantees on your code the interpreter or compiler of your language of
choice gives you and which it doesn't.

After your code passed the compiler or interpreter, there's a lot space to
further examin the behaviour of your program. And you most probably should, 
since "syntactically correct" is rarely enough for a piece of code. The next level
seems to be what's refered to as "unit tests". Key insight is, that you should
write tests, that automatically verify that the atoms in your program behave as
expected. Those test should be able to run very quickly, like so quick, that you
could run them after every save off a file and get instantanious feedback.

From tests on the atoms there seems to be a continuum of tests you could perform
on your system. Test that objects of a class behave as expected. Test whether
a given class complies to an interface. Test the behaviour of cluster of classes.
And so on. This is also a place where you could spend multiple amounts of time
regarding the original programming work. So make sure you understand what
questions you should ask the system on which level of tests and do not spend time
on questions that other tests already answer. At the end of this spectrum there 
seem to be the "integration tests", that test whether the parts of your system 
fit together.

There are also some tests, that to me seem somehow connected to the social 
dimension of creating software. There are "acceptance tests", that examine whether
a program is doing what it really should do. Therefore, they somehow need to leave
out the internals of the program and are often performed as black box tests. The 
"regression tests" are there to check, whether a system still performs as 
expected. They could have much longer runtime then "unit tests" should have. 
Sometimes a "regression test" is understood as a test, that pins down a bug and
therefore in the future guarantees that the bug is not reintroduced. 
"Behavioural tests" refer to a different view on how tests should be written. 
While unit tests are written by programmers as code, behavioural tests use a 
special notation that reads naturally but still could be interpreted. In that
way, other people then programmers could write executable tests.

At some point, every attempt to test your code automatically will fail, and
you finally need manual testing. This could also be very elaborate, starting
with wild style click and run through a gui, over excel sheets with test cases,
programms that track test runs, user groups, psychologists... In every case you
should take special care, that your testers will actually tests what you expect
them to test. This is no question of honesty of testers. The problem is: do they
understand what they need to test? Can they think of tricky cases? Can they 
create the required preconditions for the test? This problem could be solved
by cleverness (that's where the gold comes into play) and knowledge, carefull
briefings and detailed plans.

We will stick to a strategy that is known as test driven development, that is,
the tests are written before the implementation. I like this strategy for a lot
of reasons. It lets me think of what i want to implement first. It forces me to
define my expectations. Going from "test cases don't run" over "test cases run
but fail" to "test cases succeed, everything works as expected" feels like a
road to victory. The safety net, when you make a change and tests fail in an 
unexpected area. This cosy "everything is like it should be", when all the tests
you collected on your road to the final program are green. This might be the
key point, as you write tests first in TDD. You actually have tests. Wise
programmers know, that "you never write the tests afterwards" for a lot of reasons. 
 
* Look up the terms i used. Did i actually used them appropriately? 
* Skim over the page of [PHPUnit](https://phpunit.de/). Download and install it,
  so you can just type "phpunit --version" in the shell, no matter which folder
  you're in.
* Create a folder 'tests' in the root of the repo. Pick one of our domain layer
  classes. Create an accordingly named  \*Test.php in the tests folder and put
  it under VC.
* Try to find an example test case on the PHPUnit page, insert it in the file you
  created and rename the class according to the class you picked.
* Run phpunit in the root of the repo. We expect it to fail somehow, since most 
  propably theres undefined stuff in your test file. If it fails, check that it
  failed for some reason that has to do with the test file you created. If it 
  does not fail, you either picked a self contained example, or phpunit does not
  recognize your test file for some reason. Make sure, that phpunit tries to run
  your test file, Google and StackOverflow are your friends.
* Go to the documentation of PHPUnit. Write two test cases, one that always fails
  and one that always succeeds. Run phpunit to check, that those bogus tests
  actually behave as expected.
* Now you should be sure that phpunit runs your test files, finds your test 
  classes and the tests they contain and gives you a proper feedback on the test 
  results.
* Make sure you understand how your tests will be run and how the setUp method
  (aka fixture) of a PHPUnit-TestCase object comes into play. What is the purpose
  of the setUp method? How often will it be called?
* Write stub methods for all kinds of tests you could imagine for the class you 
  picked. Even write down stuff you think it would be stupid to test. It's ok, 
  if some stubs stand for a group, as we will discuss the stuff you wrote before 
  actually writing the tests. Be sure that each test either has a name that makes
  absolutely clear what should be tested or an appropriate documentation attached 
  to it. Call me.
