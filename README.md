# hal

This is Hal, 
* Hal is the dumb cousin of a real smart home system. 
* Hal is not Cloud® driven because we believe the Cloud® doens't exist.
* Hal tries to be simple and easily customisable. Dumb, if you ask me.

##Hal has some folders:

```
-index.php		which is Hal's main file

-areas			is the folder where are stored the pages you reach clicking on the areas on the images
   |-area7_external.html

-config			stores the configuration files
   |-controls.php	contains the scripts to get the sensor's data
   |-sensors.php	contains the definition of the sensors and the controls

-css
   |-background-image.css	defines some things to make the webpage nice like an otter

-images
   |-house_hal01.png		is the main image on which the areas will be defined
```
##Hal's topology:
There is a "server" running lighttpd that gets data from the sensors, which are connected to the network via wifi.

##Hal sensors:
The idea is that the data is retrieved CURLing an html page, you can edit the sensors and controls config files to change or add modes of retrieving data from the sensors.
I use [ACME Arietta G25](http://www.acmesystems.it/arietta) 128MB of ram, it works well and runs Debian on it. It's connected via wifi with the rest of the network. It's dumb as it's 
needed.
They can be anything that speaks html or anything that con talk with another script, suggestions are welcome!!

##Hal background image: 
The image has been crafted in GIMP using the pencil tool (with SHIFT you make straigh lines and with SHIFT+CTRL you make straight aligned lines)
The active areas are manged via the html areas, there is a useful online tool that assists you in the definition of the areas: [ImageMap 
Generator](http://imagemap-generator.dariodomi.de/).
The text in overlay is defined in the css.

#ToDo:
1. Data logging
2. Graphing
3. Interaction with sensors: "sending actions" to the sensors like switching on and off lights.
4. Adding a common array of sensors, these are the ones I want to implement:
	* brightness  
	* humidity  
	* temperature 
	* current clamps 
	* soil moisture
