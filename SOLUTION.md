# A Word on the Solution to the Exercise
The solution to the exercise is pretty simple if you follow the instructions given in the README file.

The only file you need to touch is ```docker-compose.yml```.

We have built the two services in a slightly different way:
* For ProductService, we've built it using Dockerfile.
* For WebProPanel, we've directly specified the image we want to use in ```docker-compose.yml```.

Reason for this is two-fold:
1. To highlight that there are multiple ways of building a service using Docker Compose.
2. The WebProPanel is too simplistic. Even if we were to go by the Dockerfile route in the WebProPanel, the Dockerfile would just contain 1 line: ```FROM php:5.6.36-apache```, and that would be it.

## Volumes
In order for the services to pick up the changed code on-the-fly, we can use volumes. (Just see the ```volumes``` heading in the ```docker-compose.yml``` file for both the services.)

This will save you the trouble of running ```docker-compose up``` again and again after changing some piece of code.

Thus, it is highly recommended to use Docker volumes in such cases to make your lives easier in the development phase.

## How to Run the Thing?
You just need to run ```docker-compose up```, and that's it! :sunglasses:

This is yet another proof of how docker can simplify things for you! :smiley:
You *just* need to run this simple command, and you are up and running with your services.

Compare this to your workflow now, and you'll definitely be convinced that Docker is indeed Awesome! :relaxed:

## How to Know If It Worked?
Open these two URLs in your browser, and you'll know if it worked or not:
* http://localhost:8080 (For ProductService)
* http://localhost:8888 (For WebProPanel)

(You could have exposed the services on any other ports also.)

## But the Services Don't Talk To Each Other Right Now 🤔
This will be covered in the next session. So, just **Keep Calm & Play Around with Docker!**

See you in the session. :smiley: