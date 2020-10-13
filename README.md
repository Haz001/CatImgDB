# CatImgDB
CatImgDB is the de-facto web database for collection and rating of cat images. It is written in HTML, CSS, PHP and mySQL.

## What is this
This is the code for a yet to be released website (due to security issues). This allows the collection and rating of images.

## Installation requirements:
- Web server
	- Tested on `Apache` `v2.4.46` web server
- PHP
	- Tested on `PHP` `v7.4.10`
- MySQL compatible DBMS
	- Tested on `MariaDB` `v10.5.5`
- SQL manager
	- Tested on phpMyAdmin
- Operating System
	- Tested on `Manjaro Linux x86_64`
		- Kernel `GNU/Linux 5.8.11-1-MANJARO`

## How to install
1. login to your `SQL Manager` and add a new user
2. Make a new database
3. Run the SQL in `sql.sql` in the new database
4. Save the new users `username`, `password` and name of the new database in a file called  `index.php.pwd` with the format:
```
[username]
[password
[database]
```
5. Save `index.php.pwd` to the root directory of the web server
6. Copy `src/index.php` to the root directory of the web server
7. Connect to it through [localhost](http://localhost/index.php)

## FAQ
- Can this code be used for other pictures besides cats?  
Technically yes, we have not yet added are [CatID AI](#catid) yet so there is nothing stopping this code being used to build another image site. 
- Where can i access this site?  
Nowhere, unsettlingly this site is not yet public.
- Why is this site not public yet? When will it be?  
This site is not ready for public, this is due to security and quality issues.  
We have no time frame for when it will be public.
- How can I help?  
As I am doing this project to learn SQL I would really appreciate it if you would review my code for any bad practices and test it to find if there are any bugs.
- How will this be financially viable?  
Once are user-base is big enough we will introduce Cat-verts (cat advert), an advert with a cat in it that is also be rate-able, this will allow us to keep to our sole aim of collecting and rating all cat images in the world as the cat-vert will technically class-able as a cat image.
- What makes this the de-facto web database for cat images?  
It has a [plan](#todo)  
It has been designed to be [much better than competitors](#whybetter)  
Its main and only purpose is to be a `web database for cat images`


## <span id="todo">To Do List</span>
### Done
- [x] URL Upload of Cat Image
- [x] Form for URL uploading
- [x] Displaying the DB

### Currently working on
- [ ] Rating system
- [ ] Reporting System
	- To get rid of anything that is not biologically a cat

### Plans for the future
- [ ] CatImgDB Account
- [ ] API
- [ ] Security
- [ ] Upload from computers

### Dreams
- [ ] Decentralize, allows multiple CatImgDB to communicate to expand DB.
- [ ] <span id="catid">CatID</span>
	- A AI program that has two tasks:
		- Identifies if something is a cat or not and then allow or mark it for approval.
		- Take over the world

## <span id="whybetter">Why is this better than all the competition?</span>
- CatImgDB sole aim is to collect and rate every cat image
	- [Instagram](https://www.instagram.com/), [Flickr](https://www.flickr.com/), [unsplash](https://Unsplash.com/) and other image websites are aimed at collection of all types of images, not just cat images, thus won't be as good.
	- [r/cats](https://www.reddit.com/r/cats/) is not solely aimed at the collection and rating of cat images but everything about cats.
- CatImgDB is distraction free, only cat images
	- [r/cats](https://www.reddit.com/r/cats/) and [r/kittens](https://www.reddit.com/r/kittens/) both allow text posts and videos, these are not Cat Images thus are distractions, thus inferior.
- CatImgDB provides a barrier-less experience, all you need is a title and a URL of a cat image
	- [r/cats](https://www.reddit.com/r/cats/) does not allow accounts less than 10 days old or have less than 50 karma to post, thus preventing the collection of cat images.

## Versions
### v0.1 [current]
It can currently take a URL with a title and add it to a SQL database.
It can then show that database as a grid of pictures with title at the bottom. Its title will expand and become more visible when the picture is hovered over.

## Screenshot
![Screenshot 1, v0.1](ss0.jpg)
Current cat pictures are from [unsplash](https://Unsplash.com/).

