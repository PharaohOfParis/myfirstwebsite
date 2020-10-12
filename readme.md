# My version of Bamzooka website

## Description

Hello, I am learning how to use Bootstrap efficiently. My first job is to redo the existing Bamzooka web page (https://bamzooka.com/) with my tools: HTML, CSS, PHP, Bootstrap. Then I must host it on Firebase. 

## Installation

First install PHP:
```bash
sudo apt install php
```
Then install Apache:
```bash
sudo apt-get install apache2
```
Finally install the Firebase CLI:
```bash
curl -sL https://firebase.tools | bash
```
NB: For more details, see: https://firebase.google.com/docs/hosting/quickstart .

## Getting Started

### With Apache:

Put your website folder in the following repertory: `/var/www/html` .

### With Firebase:

Go to your repertory above `src` and `images`  and type:
```bash
firebase init hosting
```
Then follow the instructions.

## Usage

To edit the code, go to the `src` folder, and then you can modify either the header(`header.php`), footer(`footer.php`), or the main page (`index.php`). 
To add logos or images, put them in the `images` folder. 
To see your changes, deploy your website in local either with PHP or with Apache. To do this, read the `Deployment` section below.
When your website is ready to be shown to the World Wide Web, put the `src` and `images` folders in the `public` folder.

## Deployment

I did three ways of deployment (2 locals and 1 global):

### local with PHP: 

First start the PHP server in the repertory above `src` and `images` by typing in a shell:
```bash
php -S localhost:8000
```
Then go to your browser and type in the URL : http://localhost:8000/src .

Finally, after finishing working, to stop the PHP server, do Ctrl-C.

### local with Apache:

First start the Apache server by typing in a shell one of the 3 following commands: 
```bash
sudo /etc/init.d/apache2 start
```
```bash
sudo service apache2 start
```
or via systemd for Debian/Ubuntu Linux users:
```bash
sudo systemctl start apache2.service
```

Then go to your browser and type in the URL: http://{ipAdress}/{repertory}/src/
 where:
- {ipAdress} is your IP address;
- {repertory} is the name of your repertory containing "src" and "images" within the `/var/www/html` folder.

To know your IP address, you can type in a shell: 
```bash
 hostname -I
```
Your IP address is the first group of numbers.

Finally, after finishing working, to stop the Apache server, type:
```bash
sudo /etc/init.d/apache2 stop
```
```bash
sudo service apache2 stop
```
or via systemd for Debian/Ubuntu Linux users:
```bash
sudo systemctl stop apache2.service
```
### global with Firebase:

After finishing working in local, to deploy the website in global on Firebase, type:
```bash
firebase deploy --only hosting
```

Then go to your browser and type in the URL one of the 2 following URL:

- https://bamzooka-copy.web.app/
- https://bamzooka-copy.firebaseapp.com/

NB: If your work hasn't changed, you don't need to do the first step the next time you want to see your website. 

