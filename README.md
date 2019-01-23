# openGis


openGIS is my ongoing project for creating an Open-Source WebGis application that can replicate the functionality of a stand-alone desktop software but in a browser. A mobile data collection tool using GPS is also a part of the project. 

<p align="center">
  ![](/InterfaceImg/architecture.png)
</p>


The main system components are the browser (client), the web server and the database (image above).
The client makes the request to the server using AJAX, which using PHP sends the request to the database and receives the response as data which is send back to the client using again AJAX.


In order to replicate the functionality of a desktop GIS software, a key element I am trying to implement is the system’s ability to dynamically work with data. This means that instead of having a predefined amount of data, the application should dynamically adapt to the changes in database and try and accommodate data with different geometries, projections and attributes.


I have also tried to design a workflow when choosing working data by bringing it to the map based on a specific location or area in order to reduce the computational load on the client side (image above).


After setting a work area (the user can draw a polygon representing the area, choose the full extent of the data or select the administrative limits as working area), a list of available data is queried to the database, the attribute tables for each dataset can be visualized and data can be added to the map. 

![](/InterfaceImg/workflow.png)


 Future improvements and work in progress: 
 
 
• uploading data from user’s computer in different formats and saving it to the database( formats such as GPX for surveyed points, SHP or GeoJson)


• query builder where SQL queries can be built using a graphical user interface directly from the browser giving the possibility to perform spatial analysis using the tools provided by PostGis 


• better geocoding 


• options for styling the data( images below) 

![](/InterfaceImg/1.png)

![](/InterfaceImg/2.png)

• Data editing capabilities 


• Digitalization of data( image below)

![](/InterfaceImg/3.png)

