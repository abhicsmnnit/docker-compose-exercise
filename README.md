# Read Me Before You Start! :book:
In the current directory, you'll see two sub-directories. Each one has code for our super-awesome services.

Right now you have only 2 services. So you might not mind starting each one individually.

But you never know how many we might end up making! So it's good to future-proof, and save ourselves from panic attacks when we'll have 10 such services! :yum:

## What do you have to do?
Before telling you what to do, we'll tell you something about docker-compose. (Quoting directly from the [official documentation](https://docs.docker.com/compose/overview/):)
> Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your application’s services. Then, with a single command, you create and start all the services from your configuration.

**Now let us tell you what you need to do.** Use Docker Compose, and just with this single incantation (you can swing your wands too! :sunglasses:), spawn our 2 services:
```
docker-compose up
```

Pretty simple, right? :bowtie:

Well... If you were awake in the first Docker Session, then it's pretty simple. :relaxed:

But... :point_up: if you were sleeping :sleeping: (and we know you were!), and therefore not sure how to go about doing this, we would suggest you go through these docs to get to know Docker Compose:
- [Meet Docker Compose](https://docs.docker.com/compose/overview/) :whale:
- [Install Docker Compose](https://docs.docker.com/compose/install/) :arrow_down: :whale:
- [And get your hands dirty!](https://docs.docker.com/compose/gettingstarted/) :open_hands: :whale: *(Hint: This page has solutions to all your problems! :wink:)*

## A Word On The Services
You have 2 services right now:
- Product API Service
- WebPro Panel FrontEnd

Product API Service has been implemented in Python, and the WebPro Panel has been written in PHP.

However, **to complete this challenge you don't need to know either Python or PHP.**

And to relieve you even more, we have gone ahead and dockerized Product API Service for you already! :innocent:

And for the WebPro Panel Service, we can tell you that you need to:
- Use an image named [```php:5.6.36-apache```](https://hub.docker.com/_/php/)
- And, copy the php file in the ```/var/www/html``` directory of your container

**You just need to fill the ```docker-compose.yml``` file**, and say that magic incantation:
```
docker-compose up
```
That's it!

## Bonus Points
You would not want to keep restarting your services when you make some changes to your code.

To avoid that, use **docker volumes** so that your containers have direct access to the changed code.

## How To Verify If It Worked?
You should be able to call your services (from your browser) on whatever ports you started them on. *(Hint: Ports will go in the ```docker-compose.yml``` file.)*

Right now, the 2 services are not communicating with each other. But what fun will the next session be if you were to do all the hard work!?! :sweat_smile:

## What If I Still Can't Do It?
No problem! You can talk to any one of us: Birju.s, Rajeev.s, Supriya.m, Sudheer.m, Prasad.p, Arnav.c, or Abhinav.ve.

And if you are too shy to do even that, we'll anyway show you how to do this (and much more! :sunglasses:) in our next Docker Session. So stay tuned! :simple_smile: