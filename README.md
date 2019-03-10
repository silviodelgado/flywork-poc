<img src="https://www.interart.com/utils/logo-flywork2.png" alt="Flywork">

# Flywork - PoC

[Flywork Framework](https://github.com/silviodelgado/flywork) - Proof of Concept Project

This project is an example showing how the Flywork framework works.

## Default Namespace

The default application namespace should be "App\\", which allows Composer and PSR-4 to correctly handle classes.

## Minimal File Structure

* /public
  * /bundles
  * .htaccess
  * index.php
* /src
  * /Controllers
    * /Rest
  * /Models
  * /Views
* /writable
  * /cache
  * /logs
  * /upload

### Folders and root files explaining

#### /public
&nbsp; &nbsp; You should put web assets (css, js, img, etc) in this folder. Organize it as you want, but keep in mind that these files are accessible via HTTP requests.<br>
&nbsp; &nbsp; The files ```.htaccess``` and ```index.php``` are essential to run the application.

#### /public/bundles

&nbsp; &nbsp; Contains all generated bundles (combination of files - CSS or JS)

#### /src

&nbsp; &nbsp; Contains application source code.

#### /src/Controllers

&nbsp; &nbsp; Contains all application web controllers.

#### /src/Controllers/Rest

&nbsp; &nbsp; Contains all application RESTful controllers.(which will be called through url ```/rest/controller-name/action```)

#### /src/Models

&nbsp; &nbsp; Contains applications models, which handles database entities and data manipulation.

#### /src/Views

&nbsp; &nbsp; Contains all application views (you can organize it in subfolders).

#### /writable

&nbsp; &nbsp; This folder is necessary to put all files which is written by framework.<br>
&nbsp; &nbsp; Should contains ```cache```, ```logs``` and ```upload``` subfolders and be setted as writable.

#### /composer.json

&nbsp; &nbsp; Main composer application file.

#### /flywork.sql

&nbsp; &nbsp; Sample database script.
