###Representation of the Single Responsibility pattern

As stated in Wikipedia, "The single responsibility principle is a computer programming principle that states that every 
module or class should have responsibility over a single part of the functionality provided by the software, and that 
responsibility should be entirely encapsulated by the class. All its services should be narrowly aligned with that 
responsibility. Robert C. Martin expresses the principle as, "A class should have only one reason to change.""

In simple words that means that the class should **NOT** be responsible for the actions that should be executed by 
others. Just like a division of labour - if you're programming at your workplace you're not responsible for building
next room of the office. Ideally, because shit happens.

For sure the next statements are only my vision and you could totally disagree with it. Moreover, the examples might be
a bit exaggerated but it is much easies to separate it to black and white for now. Additionally there is not that much 
logic that can be incapsulated, so I made it only for the Person.

So here are two implementations of the Cup which are doing exactly the same - they are being created to be filled
with coffee and to let Dave survive one more morning. So what are the differences? Obviously the "bad" solution is
much smaller and takes only a few minutes to be created and the "good" one is situated in a big pile of files. Let's 
see the smallest progression which would lead to disaster.

Imagine the situation that after some time, Dave decided to try something new, so he takes cacao.

####For the new code 
we would be create just one more Liquid: 

`$cacao = new Liquid('cacao');`

####For the old code 
we would need to modify what can be poured into the cup.

`if ($liquidName != 'coffee' && $liquidName != 'tea'  && $liquidName != 'cacao') {`

Looks not that good already. And let's think about this in objects way - the cup decides what would be added to it.
Would you like to have a cup that would crash if you would add something that is not written at the bottom? I guess not.
But let's continue!

And dinner time!

Dave decided to make a soup in his cup. The process is simple. He need to pour concentrate, add water and maybe he would
add a few croutons. And he will eat this with a spoon. Sounds logical.

####First approach - 
we would create one more class, let's say 

`class Solid implements StorableInterface`

And we will add a few more ingredients 

`$concentrate = new Solid('concentrate');`

`$crouton = new Solid('crouton');`

Next we would need to implement a few changes in the cup class - that it would add objects to array. And we would add one 
more method to the Person, so this object would be able to eas something with the spoon from the cup. And we can create 
an interface for the cutlery and make an implementation - spoon, fork, sticks. Dave is a grown up man and he 
decides how the hell would he eat his soup! 

####Second approach

And here the process begins to be complicated. First - we need to refactor the `pourLiquid` method or create one more 
depending on amount of logic, refactor the storage and the most strange - we need to refactor `beUsedBy`. So now the **CUP**
decides how Dave would eat from it. Sounds a bit horrifying, isn't it?


And if we would keep adding conditions and new elements, everything would be growing. But in the first case **ideally** we
would stay with the separated parts, each of them would be responsible for it's own behaviour and would have it's own
logic. And when you would need to add a change, you would be 100% sure where to put it. You won't make the cat responsible
for being driven to the vet.

In the second case - we would face the terrible code, god-object, that are responsible for absolutely illogical actions,
so you would have a CommentService which is responsible for the user creation and database truncation. And you won't
be able to change it - there would be too much logic tied up with this abominations. And every change would lead to disaster.


So here we are! Save the Dave! Don't let the cup decide the world order!