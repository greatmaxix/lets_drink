Functional specification
========

## **Describing the current situation**

We want to develop a drinking game. this game doesn't really need users as
most people we simply have a name and their game data will be destroyed
on exit.

========

## **Use cases**

We want this game to be quickly and easily setup. for use at parties. An
entertainment game used for fun at parties

## **how does it apply to the use cases**

because our users are probably drunk we need it to easy to use and setup
simply choose one of two games to enter the number of players and their
names and start.


=========



## **What it should be, and what it should not be**

#### MUST NOT;
- be overly complicated and take more than 4 minutes to setup
- use copyrighted names for drinking games that already exist.

#### MUST:
- be colorful and vibrant to appeal to our users
- Each player should feel enjoyment while playing meaning it should
- run cleanly and smoothly


=========


## Constraints on the system (eg.: laws, standards)
As per said in the requirement specification, the software must oblige the new requlations in the EU, namely GDPR. This means whatever data we collect from the user, must be treated with the upmost care. Also the user MUST explicitly accept the collection and use of his/her data.

As stated in the requirement specification, copyright content can be used for educational purposes. Although it varies country-by-country, if the original author/source must be stated or not. This would mean a great constraint on the system in case of commercialising the software. In case of free educational software, the differences between the countries does no concern us, we will only have to oblige to the laws in the country, where our organization is stated, and where the original source of the server side of the software is. Even if CDN is used, the original source is the one we have to oblige.

As per said in the requirement specification, whenever communications happen between the client and server side, the data should be sent in a json format. It is one of the most popular standards nowadays. If the communication happens on http/https protocol, it is also a good idea to use normalized url-s with it, similarly to a RESTful API.
