# ![alt text](https://github.com/karstenrowe/kt-ds/blob/master/images/logo-type-kt.svg)

## Design System
KeepTruckin's own in-house Design System!

_A Design System is the single source of truth which groups all the elements that will allow the teams to design, realize and develop a product._

## Getting Started
Since this is V1 of our Design System, we have made it very lightweight where we don't have a whole lot of bloat to get our app running.


### Setup
> A step-by-step guide for pulling our current Design System application through Github and serving it with a local php web server

```
$ mkdir workspace
$ cd workspace
$ git clone https://github.com/karstenrowe/kt-ds.git
$ cd kt-ds
```

> let's now serve our application
```
$ php -S localhost:8000
```

Your app should now be running and enter https://localhost:8000 on your browser of choice.


### Start Developing! 

> Basic file structure to get your started! 
1. Adding a file in `/markup` will automatically create a section within our design system for you to start developing.
2. When adding a `.scss` file, please don't forget to @import it in `style.scss`. 


Structure
```
kt-ds
│   README.md
│   index.html  
│
└───markup
│   │
│   └───component
│       │   {add your html file here}
│       │   ...
│   
└───scss
│   └───component
│       │   {add your scss file here}
│       │   ...
│      
│     style.scss
```
