Structure the forthcoming 
=========================

After we understood and agreed upon the requirements in the first lesson, we
need to derive a plan how to actually implement the functionality we want in our 
program. This plan is often referred to as the design or architecture of the 
software.

When writing software, a naive or brute force approach might work in small, scoped 
projects that take limited effort to be implemented. It will fail for sure, if 
you're working on a large project, that takes time to be developed, where lots of
people working on the same piece of software.

Thus we need to structure our program to break it in manageable and intelligible
parts. Even the process of thinking about the structure has some value in it. We
won't find all problems in advance, but we could at least make sure, that we have
a proper understanding of what needs to be done in terms of concrete technology.
We need to be able to transform the requirements (that don't talk much about 
technology) to structures in our program. It's also very likely that we'll find 
the requirements to be unprecise in this regard. The same functionality could 
be implemented in many different ways, thus we need to take decisions that stem
from more than the requirements. 

In some way this makes the design subject to personal preferences or experiences
that can't be generalized or judged. Despite this, there are patterns that are 
used widely throughout different programming communities or even across them. I
won't speak up for any of those patterns, guidelines or principles (here!), but
instead try to give some more rationales why it is usefull to at least follow any 
of them and why it is even more beneficial to think about which ones are actually
fitting the project.

If a program is implemented based on clear design and principles it will be a 
lot easier to work on it with others. This holds, when many people actually
implement stuff simultaneously, but it also holds, when the 'other' you are
working with is you, some month ago. You'll find it easier to read code, that
you didn't write or don't remember. When writing new code, you do not have to
start from first principles, but already have some patterns and idioms ready to
use. It is easier to use code from other people, perhaps even without the need
to consult the documentation to often when interfaces adhere to some convention.

The design of a program could also lead to less bugs beeing introduced during
development. This is true on different levels. When programming clear and simple
abstractions help you to focus on the actual problem to solve. You will find it
easier to think about a problem in terms of reliably abstrations and the code
you are writing will express your intentions more clearly. When your program is
structured appropriately, you'll be able to implement automated tests that will
find bugs for you and give you confidence that your program works as expected.
More over, a clean design will help you to find the cause for a bug, once it is
discovered.

Many of the problems you are facing during development of computer programs will
be looking overwhelmingly complex when you first see them. You then usually start
to divide and hopefully conquer, that is, break your programs in pieces until the
complexity is low enough to solve them one after another. This will not always 
work, as you could choose a division of you problem that actually makes it harder
to solve the problem, not easier as it's supposed to be. This is where a lot of
well known design patterns and principles come in handy, as they encode best 
practices in development with known strenghts and maybe weaknesses you can reason
about. There also is the opposite site, as there are well known antipatterns you 
should avoid.

When your projects ain't an one-off program that you'll never modify or touch
again (like virtually always), the design of it could make it easier to modify or
extend it in the future. Often the reusability of code is emphasized, and i also
think it has its value. The complementary aim of refineability to me seems a 
little undervalued. Writing code that you could modify often has more value then
writing code, that is general enough to be reused. While the former is about an
actually working piece of software (the program you are developing), the latter 
is about a future, where you would need the same functionally somehow different
(contradiction intended) and that might never happen. So stay away from the 
seduction to overgeneralize or write a framework when you actually should be 
writing an application.

As we will be meeting to discuss the design of our application, the tasks in
this lesson are preparative. After doing them you should have a general overview
of problem space, you should be able to name some patterns and principles and 
understand and explain some of them as well. The following is far away from a 
complete list.

* Let's start with some high level principles. Google or wikipedia them, find out
  what the acronyms mean and what the rationale behind them is:
    * KISS
    * DRY
    * YAGNI
    * SOLID
    * GRASP
* Search for UML (Unified Modelling Language), read a little about it and look
  at some diagrams. Try to understand, why there are so many different kinds of
  diagrams.
* Try to understand what these things are and how they relate to each other:
    * control flow
    * entity relationship model
    * data model
    * state model
    * class model
    * actor model
* Go to the wikipedia page for [software design patterns](http://en.wikipedia.org/wiki/Software_design_pattern)
  and skim over the stuff. Then give at least three of the patterns a closer
  read. Understand the problem they solve and how they solve it. 
* Search the internet for software development anti-patterns and read a little.
  Try to understand at least 3 anti-patterns specifically. Why are they considered
  anti-patterns?
* Read closely about the following patterns, as we will likely be using them in
  our application:
    * Model-View-Controller
    * Command-Query Separation
    * Dependency Injection
    * Factory
