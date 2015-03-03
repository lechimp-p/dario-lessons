# Dear Dario, 

you want to learn programming.

You've already seen two or three programminng languages and accomplished 
some small tasks with them. So you know, how to write common controll 
structures like if/then/else or for. You also have an idea of some standard 
data structures, like lists, arrays and dictionaries (or whatever they were 
called in the languages you've already used). You are also acquainted with 
procedures and know what someone is talking about when saying argument or 
return value. You have also heard of object oriented programming and could 
in principle describe what OOP is about. 

Despite all those things you already know, you do not feel like you could 
really programm. You feel there is something more to it than writing down
silly stuff like

```
def helloWorld():
    print "Hello World!"

helloWorld() 
```

And i think you're right. Starting from the things you already now, i like
to try to give you some insights on the 'more' there is in programming. To
me it is not stuff like knowing a specific library or framework, knowing 
every dirty trick you can play in a certain language or having the solution
to every problem you want to solve in you language of choice. 

All that knowledge is nice to have and it could be worth to spend some time 
on those things. But i think they are not really necessary to be a good 
programmer.

The first is almost always mitigated by the documentation of the framework
or library. If you have an idea of the problems, the library or framework
wants to solve, it should be easy to understand its interface and search the
docu for the stuff you want. If thats not the case, you might just want to
pick another one.

The second is also a nice to have, since there is a lot of interesting things
to explore in this field in almost every language i saw. I found it especially
interesting to look into that stuff in python. But you should not rely on 
those tricks. They could only be played in one language, they often are hard
to maintain, debug and even hard to understand for your collaborators. So in 
this lessons, we'll try to stick to stuff, that could be reused in different
languages.

And for the third: Well, most of the time (read like: always) you're not the 
first person encountering a problem. So Google and StackOverflow are your
friends. No need to know everything by heart.   

This lessons therefore deal with problems you need to solve regardless of the
language you want to or need to use for a project:

* How to understand what needs to be done to finish a piece of software?
* How to deal with the often overwhelming complexity your facing when 
  first exploring a given problem?
* How to structure your code and how to design your system?
* How to write robust and clean code?
* How to actually create a piece of production ready software?

I do not have a definite answer to any of those questions and the partial 
answers i could try to give are based on my personal approaches to said problems. 
Different approaches might be more usefull for someone else.
I therefore consider it to be important for you, to investigate problem space 
and explore solution space on your own. This is where i want to support you with 
this lessons. I will of course also show or hint you at the approaches i use.
Please be critical with those and try to find your own.

Since we still need something common to talk about and this lessons should also
be pratical in a strong sense, i take the follwing technical decisions on what 
we will be examine for now:

* We will write a software for the Web. Almost every modern software nowadays
  wants to have at least some connection to the internet. A whole lot of software
  runs in your browser. 
* We will be using PHP. Although i think PHP is a slap in the face of language
  design and is plastered with wtfs, it is heavily used for Web applications and 
  offers a simple starting point, were you could almost immediately see some 
  results.
* We will be using Linux as development environment. You need to know at least
  a portion of linux stuff to be able to become a decent programmer. And i don't
  want you to spend time on finding out how to do fairly basic and simple stuff
  in an windows environment. On linux, me and the internet will be pretty good
  to help you with that.
* The application we will build is a fairly simple ToDo-Application. Users can
  login and logout; create, view and share todolists; add, remove and prioritize 
  items on a todolist; mark items as done; assign items to people.

So that's the mission statement, gl hf and start with lesson0.
