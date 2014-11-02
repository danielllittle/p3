# P3 Project: Developer's Best Friend

## Live URL
<http://p3.harvardalm.me>

## Description
A toolbox utility for helping developers with:
  * generating random user profiles
  * generating random paragraph text.

## Details for teaching team
No login required.  Project will be presented in screencast format.

The file `legislators.json` was used to store the array containing over 500 users.

Delivered the following features:

    General
    1. 'Welcome' default landing page 
    2. Site navigation
        -page links provided from welcome to lorem ipsum & user profile tools
        -top level navigation links on lorem ipsum & user profile referring back to welcome landing page
    3. Dynamic contextual page title
        
    lorem ipsum utility
    1.  User drop down input assigns dynamic number of generated paragraphs
      -range of values supported (1-9)
    2.  Generated lorem ipsum paragraphs formed with integrated third-party library (see Outside code below)
     
    User Profile utility (with a political slant!)
    1.  User textbox input assigns dynamic number of generated profiles
    2.  toolbox stores over 500 random users in JSON format
    3.  Implemented validation requiring numeric input
          -max 100 limit validation not delivered
    4.  user option to include social profile links generated for Web Bio, YouTube & Twitter 
    5.  political theme - user profiles are formed from existing US political leaders in honor of upcoming elections
    

## Outside code
* For the lorem ipsum text generator, PHP package provided by [badcow/lorem-ipsum](https://packagist.org/packages/badcow/lorem-ipsum)
* For the user profile generator, User data supplied by [govtrack.us API](https://www.govtrack.us/api/v2/role?current=true&limit=600)

## Social Icons provided by:
1. [Twitter Button](https://about.twitter.com/resources/buttons)
2. [YouTube](http://www.youtube.com/yt/brand/downloads.html)
2. [SoftIcons.com](http://files.softicons.com/download/system-icons/cats-icons-2-by-mcdo-design/png/32x32/Web%20Site.png)

==
