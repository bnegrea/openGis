# openGis
#openGis is ongoing project for creating a WebGis application using open source technologies that ca be used a lightweight allpurpose Gis software(data visualisation, map creation, data editing, import and export of data) using only one interface that connects multiple technologies. 

##Components and languages used: 

-Database-PostgreSQL+PostGis--SQL

-Front end: Leaflet as mapping library -HTML,CSS,JavaScript

-Server side: PHP

-Plugins: EasyButton,OpenCageSearch,LeafletMarkerCluster,leafletPolylineMeasure,LealfetDraw,sidebar-v2,Leaflet-ajax,leaflet-providers,jquery
  
  
 Interface:
 
  Basic Interface
  
  ![](/InterfaceImg/1.jpg)
  
  Choosing between different base maps and left menu retractable side bar on the way
  
  ![](/InterfaceImg/2.jpg)
  
  Visualisation and styling of data stored in the database(here data showing administrative limits, and train station locations represented as interactive clusters)

  ![](/InterfaceImg/3.jpg)
  
  Symbology changed at a larger scale, more data added to the map(here representing train lines) and atributes displayed when mouse pointer hoovers on top of the point data

  ![](/InterfaceImg/4.jpg)
  
  Draw capabilities

  ![](/InterfaceImg/5.jpg)
  
  For performance optimisation, user can select a "working area" as a polygon and te data added is restricted to the polygon boundaries.

  ![](/InterfaceImg/6.jpg)
  
  Same data as before (train stations) is added to the "working area" whithout any styling or clustering

  ![](/InterfaceImg/7.jpg)
  
  
  
  Future implementation and work in progress:
  
  
  -building and interacting with the atribute table of each layer
  
  
  -data upload directly from the user in different formats and the posibility to be saved in the database
  
  
  -better editing capabilities
  
  
  -better geocoding and routing implementation
  
  
  -improved search capabilities
  
  
  -query buider
  
  
  -analysis tool(PostGis,turf.js)
  
  
  
  -overall improvement and design of the interface, layers as tabs, database view



  
  
