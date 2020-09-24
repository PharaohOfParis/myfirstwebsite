# My version of Bamzooka website

Hello, I am learning how to use Bootstrap efficiently. My first job is to redo the existing Bamzooka web page (https://bamzooka.com/) with my tools.

## Usage

There are three folders and one main file :
- the Images folder with the two logos and the three Fontawesome images;
- the Sources folder with the PHP files (index, header and footer) and the CSS page;
- the Public folder with all the files needed for the deployment on Firebase;
- the firebase json file with the settings for the Firebase deployment.



## Deployment

I did three ways of deployment (two locals and one global):

### local with PHP: 

First install PHP:
```bash
sudo apt install php
```
Then go to the repertory containing "src" and "images" and type:
```bash
php -S localhost:8000
```
Then finish by going to your browser and type in the URL : http://localhost:8000/src

Finally, after finishing working, to stop the PHP server, do Ctrl-C.

### local with Apache:

First install Apache:
```bash
sudo apt-get install apache2
``` 
Then copy the repertory containing "src" and "images" and paste it to the following folder : /var/www/html .

Then start the Apache server by typing: 
```bash
sudo /etc/init.d/apache2 start
```
Then go to your browser and type in the URL : http://XXX/YYY/src/
 where:
- XXX is your IP address;
- YYY is the name of your repertory containing "src" and "images".

To know your IP adress, type: 
```bash
 hostname -I
```

Finally, after finishing working, to stop the Apache server, type:
```bash
sudo /etc/init.d/apache2 stop
```
### global with firebase:

Go to your browser and type in the URL one of the two following URL:
- https://bamzooka-copy.web.app/
- https://bamzooka-copy.firebaseapp.com/

## TODO

Re-organize the web code for the smartphone mobile display. 

## Last Update day:

09/24/20

