# Open-Closed principle

As stated in Wiki, "In object-oriented programming, the open/closed principle states "software entities (classes, 
modules, functions, etc.) should be open for extension, but closed for modification"that is, such an entity can 
allow its behaviour to be extended without modifying its source code." What does it mean? Simple principles - first don't touch
the old code if you don't really need to. Most of the projects around us are legacy, so we need to create the new 
functionality using the old one. Isn't it easier to create the new class that would be used instead of writing tons of 
"if\else"? Second statement - inner information of the class should not be visible outside, because we have too many lazy guys
that would prefer direct access.


And now it's time for example. Good ol' Dave, coffee and kitchen.

### First approach

Dave's company decided to add drink machines to the kitchen. The idea is simple - to have something to drink for the 
workers. Basically we have absolutely the same result at the first lines of the runner. Both machines are doing the same 
job here. 

### Second approach

And great day for the Dave! Company decided to use coffee machines! 

At the first glance, the "bad" solution is much 
easier - we're having one if instead of the whole class, what could possibly go wrong? And we have a logic in one class
instead of splitting between. And here's the trap, boiling frog principle. You would be adding line by line, if by if and
suddenly you will see the class that has 2000+ lines and all of them belongs to the pourDrink method. 

And what else is wrong? public properties. Just imagine this coffee machine as one without protective case, all mechanisms
are visible and it could hit you with electricity as the wires are not grounded. "It is only a program!" you'd say.
Yeah, but the results of the opened stuff in program could be CATastrophic. Here we have it:

`$drinkPourer->liquid = 'cat';`

Voila! And in the middle of the day our coffee machine starting to pour liquid cats. It's all very cute but people do 
want coffee. And instead of increased productivity we have a decrease. And cat fur in the cups.
  

### Third approach

And finally the company decided to add the machine that would pour the soft drinks of 15 types and wine or beer 
every Friday.

For the "good" solution we would just create the appropriate class. It will be big but maintainable. In the "bad" 
solution there would be 90% that you would need to add more if's, switches, etc, as it would be hard to convince to use 
some different approach, as everything seems to be set up.
