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

Many of the problems you are facing during development of computer programs will
be looking overwhelmingly complex when you first see them. You then usually start
to divide and hopefully conquer, that is, break your programs in pieces until the
complexity is low enough to solve them one after another. This will not always 
work, as you could choose a division of you problem that actually makes it harder
to solve the problem, not easier as it's supposed to be. This is where a lot of
well known design patterns and principles come in handy, as they encode best 
practices in development with known strenghts and maybe weaknesses you can reason
about. There also is the opposite site, as there are well known antipatterns that
you should avoid.
