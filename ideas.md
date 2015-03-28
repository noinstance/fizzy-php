- enforce viewmodels
	- merge viemodel into models via annotations
		- create annotaion mechanism for php

- no bloody complex ORM - sql is to be written

- models are storage ignorant
	- http://stackoverflow.com/questions/5863870/how-should-a-model-be-structured-in-mvc

- no cache
	- fizzy deamon holds stuffs in memory for fast access
	- data is sent and requested to fizzy-d 
		- it holds new data / edits before saving (no cache to be cleared)

- auth is root
	- root can do a bunch of stuff

- (cli) static files generated at will given dynamic route
	- fizzy automatically routes to static content before dynamic unless requested by root

- (cli) import/export db
