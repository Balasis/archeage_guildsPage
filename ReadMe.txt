This website was initially created for a guild in an rpg/mmo named archeage. Unfortunately the guild was disbanded before I
could finish the website(since I did this alone it took me a bit.). Since it was meant for a guild only the administrators
could set up events at the calendar, create categories at the forum of it (ofc threads could be created by members too but
there needs to be a category first created by an administrator). Also in order to sign up as you can see it requires a serial
key (given by the administrator of the website or the guild leader.the keys would work as 1 use keys(auto deleted after its use)
(sigh just noticed that I haven't included an inside platform to create categories. I left it as sql change only since the
categories of the forum were supposed to remain unchanged).anyway I included an INSERT INTO at mysql folder to add some categories
just for view
.
the whole site can be maintained by anyone since administrator accounts has extra panel provided to them to update all the content
without need to have any kind of knowledge in webdevelopment.

PHP 7.2 / mysql(5.6 was but whatever you dont need the version since you will recreate them)/ uses jquery too

You need to create the mysqli tables and login in order to see the calendar and the Forum.

So to test the website.
Foremost:Dont forget to change the connection "?"  at DomainFiles/CS/Cs.php file to your own connection values
1) create the tables (copy paste from Mysql folder->txt)
2) login with the admin account to see also the extra panels e.t.c(you may also create a normal account.Sign up is in the login page)
3)create categories and do some posts to see how forums functions...
4)create events as administrator to check how they show up at calendar.
5)check the administrator platforms to change also the video/text/pictures in the section pages.(There is one example of video sagapw-magapas
at first section as a sample.


Known issues: Its been a while since I worked on this never posted project. So in order to make the calendar functional I had 
to tag 1-2 lines (135 lines) as comment. It was actually the make dir  mkdir which I had there for some reason and was causing
error since the folder was already there...cant remember the reason I had it there in the first place anyway.


Update: Forgive any kind of grammatical or vocabulary mistakes .I had completed this  project way before start studing for my ECPE  .