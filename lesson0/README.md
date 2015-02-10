Setting up the environment
==========================

In this prequel lesson, we will set up the environment we need for development.

As i already mentioned, this will be Linux. We want to develop for the web and
web servers mostly run on linux, so if you ever want to work in web development
some time, knowing at least a little linux will always be a good thing. Moreover 
linux offers a lot of nice tools we could use for development, they are for 
free and mostly easy to install thanks to linuxes package managers. Finally,
giving a clean command to run on a terminal and observing the result to me seems
closer to the way computers really work: you give commands, the computer 
computes. No magic hidden. GUIs with shiny buttons, smart background processes
and fancy tools seem to hide this fact, so we won't be using them too much. 

So start by:

* Get you a linux. I would suggest Ubuntu for simplicity reasons. We want to do 
  development, not system administration. If you're worried on leaving your 
  windows comfort zone: You do not need to stop using windows. Use it for email,
  gaming and whatever you like. Just install linux on a separate partition or
  drive. It will help you to install a bootmanager that could start up your
  windows system. Make sure, you can connect your fresh system to the internet.
* Start the terminal. Make sure you know how to navigate the filesystem. Find out,
  what a shell is, and which you are using. Get to know the following commands 
  on your shell: man, echo, more, grep, tail, rm, touch, sudo, cd, ls, pwd, find,
  ping, ssh, scp, telnet. 
  Create a directory in your home folder that you will be using as a place to put
  your sourcecode.
* Make sure you understand what a package manager is and how you would use it
  on your linux. Look at the GUI of the PM and also look at it in your terminal.
  Find out, what LAMP means, and install the required packages on your system.
* Find out, what a demon is and how you start and stop the demons of apache and 
  mysql. Make sure you can access apache from localhost. Then make sure apache 
  and mysql are only reachable from localhost. Verify that by actually using 
  another system to access yours. Install phpmyadmin and make sure you can access
  mysql via it. Find out where the error logs of the demons are located. Use tail 
  to follow the log of apache, provoke a php error and observe it on the followed 
  log.
* Choose a texteditor for the terminal. This will most likely lead to vim or emacs.
  But maybe you'll find another editor more fitting your needs. Your editor should 
  at least support syntax highlighting. It should be an editor for the terminal, 
  since you will sometimes have the requirement to access a system without a GUI. 
  Later on you could switch to a GUI editor for development.
  I for myself chose vim. I also find it convenient, to have a lot of keyboard
  shortcuts available for some common tasks like goto line, find, search and 
  replace and so on. Make your own choice by trying out at least two editors
  and reading about the pros and cons a little.
* Learn about, what kind of problem a version control system solves. Read a little
  about different models and common VC-programs. Then install git and read a git
  tutorial. Make sure you know what is meant by commit, branch and fork, why git is 
  a distributed vc-system and what push and pull have to do with it. Tell git your
  email address and name. Create an account on github with the same email address.
  Follow me on github and clone this repository into your sourcecode folder using 
  your command line. Create a new file named SOLUTION.md in this folder and put 
  it under git control. For every item on this list, write some sentences on what
  you learned in the editor you chose previously. If some commands on the terminal 
  were involved, note them and their purpose. If some acronym or jargon was involved,
  write down a concise definition. Use git markdown style. Commit your changes to 
  the file at least after every paragraph. Make sure you pick a meaningfull commit 
  message. Use git pull, to get changes i made in the meantime. Then check whether 
  i added you as a collaborator to this repository and push your changes back on the 
  github server.
