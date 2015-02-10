# Finally start coding

So, now we have the requirements written down and an idea of the general structure
of our application. We agreed to start with a minimal workable implementation of
the ToDo-List and expand it afterwards. We will start coding, so this lesson will 
be very practical. I still can't resist to write some paragraphs about the stuff
that should matter in this lesson.

First of all: PHP. That's the language we will be writing in. You will need to
pick up the syntax and semantics of some language constructs in PHP. Besides the
standard control-flow-variable-swapping-calculation-stuff this mostly will be
constructions related to the OOP-programming-style we're using. While learning 
PHP keep the following in mind: There is a difference between the general 
OOP-ideas and their implementation in PHP.

The keyword 'class' is used in many languages and refers to the OOP-concept 
Class. Despite that, there will be differences in the actual semantics the
construct has in different languages. There is a difference between the concept
and its implementation. So be a little cautious when you try to apply the things
you learned about classes in PHP to other languages, and vice versa. What they
have in common might be the thing OOP really 'is'.  

Second thing is estimates. It's a really good thing to be able to estimate how
long it will take to implement something. Which is also true for many other task
you might want to perform professionally. It enables you to plan ahead, tag a
price on your work, if it's in man-days or euros, and can be used two draw a
distinction between 'possible' and 'realizable'. 

It's a pretty hard thing to do, and you will be far out some time. You should 
try to develop an intuition for that issue. Maybe we will think about some more
sophisticated methods to approach or avoid the problem later.

And the third, but maybe the most important thing in this lesson: reviews. Like
in many other craftsmans professions, showing your work to other, maybe more
experienced, craftsman is a major technique to actually get better in programming.
I wish i had my code reviewed more often, actually. 

There are different aspects to a review: First off all, knowing that your code
will be looked at stirs you to put it in a reasonable, maybe even aesthetic, 
shape and avoid dark corners or sloppiness. You will, at some time, also 
appreciate that. As a professional craftsman you should always work in that 
style and reviews let you practice that.

Your code will contain a lot of things that could be improved or implemented
differently. When your a novice programmer, a review is an incredible possibility
to learn stuff from more experienced people. They are somehow obliged to tell
you what would be better if they are critizing your code. Make sure you fully
understand their proposed solutions and then implement them on your own. Don't
be afraid to make mistakes in the first place, as you will have the opportunity
to learn from them. 

As you level up and get more confidence in what you are doing, a review might
be a good occasion to discuss patterns or algorithms with others or derive a
common sense with your collaborators about how things should be done. And it's
even a possibility to show off a little and present a beautiful piece of code
you crafted.

But now: CODING!! WEEEEEEEEEEEEEEEEEEE! 

* Fire up your browser and terminal. Create a ./src-folder in the root of the
  repo. Create a ./src/domain folder as well. That's where we will be working
  in, as we start with our domain-layer.  
* Write a trivial Hello-World and make sure you can run it with the command
  line version of the php-interpreter.
* Read about the following constructs and keywords from PHP and understand their
  purpose: class, interface, trait, abstract, public, protected, private, final,
  implements, extends.
* Pick one of the three domain-classes from our design and create a php-file with
  the same name. Put it under VC. Remind yourself to commit your changes 
  frequently.
* Write down the bare bones of the class. That is: the class, including all
  public methods of the class, including documentation but excluding implementation
  and other internals. Track how many time you actually worked on the code. Push
  your changes to GitHub, call me and have your first code review. I'll add new 
  tasks afterwards. 
* Apply the things we talked about to your code: indentation, names, parameters,
  id, folders, ...
* Read about the Doxygen-style for documentation and then use it to document your
  class and methods thoroughly.
* Read about type hinting in PHP. Where would we want to use it in our code?
* Read about primitive obsession. Why is it a general problem? How could we avoid
  it?
* Push your changes to github and prepare to answer questions about the last two
  items on our phone call.
* Write the two missing classes in the same style as the ToDoList class. Remind
  yourself of commiting your changes frequently. Push your changes to GitHub.
  Call me.
