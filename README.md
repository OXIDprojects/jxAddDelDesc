# jxAddDelDesc - OXID Admin for Adding a Description field to Shipping Methods

**Module for backend/admin and frontend of OXID eShops for adding, editing and displaying a description for each shipping method**

## Installation and Setup
1. Copy all folders and files under **copy\_this** to the root folder of your shop.  
OR  
Install the [ioly OXID-Connector](https://github.com/ioly/ioly/tree/connector-oxid) (if you haven't done that already), type _jxadddeldesc_ in searchbox and click on ```Install```.
  
2. Open your browser and login into the OXID admin.
  
3. Goto **Settings** - **Modules**, select the module _jxAddDelDesc_ and and activate it.
  
4. Goto **Tools** and click on ```Update DB Views now```. This is very important, otherwise the module wouldn't see the DB changes. 

## Screenshot

Administration:  
![Active column](https://github.com/job963/jxAddDelDesc/raw/master/docs/img/admindesc.png)

Frontend:  
![Active column](https://github.com/job963/jxAddDelDesc/raw/master/docs/img/shopdisplay.png)

## Changelog

* **0.1 Initial Release**
  * Description fields (multilingual) to oxdeliveryset added
  * Block in admin for editing added
  * Block in frontend for displaying added
