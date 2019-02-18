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
  * /Models
  * /Views
* /writable

### Folders and root files explaining

#### /public
&nbsp; &nbsp; You should put web assets (css, js, img, etc) in this folder. Organize it as you want.<br>
&nbsp; &nbsp; The files ```.htaccess``` and ```index.php``` are essential to run the application.

#### /public/bundles

&nbsp; &nbsp; Contains all generated bundles (combination of files - CSS or JS)

#### /src

&nbsp; &nbsp; Contains application source code.

#### /src/Controllers

&nbsp; &nbsp; Contains all application controllers.

#### /src/Controllers/Rest

&nbsp; &nbsp; Contains all RESTful controllers.

#### /src/Models

&nbsp; &nbsp; Contains applications models, which handles database entities.

#### /src/Views

&nbsp; &nbsp; Contains all application views (you can organize it in subfolders).

#### /writable

&nbsp; &nbsp; This folder is necessary to put all files which is written by framework.<br>
&nbsp; &nbsp; Should contains ```cache``` and ```upload``` subfolders.

#### /composer.json

&nbsp; &nbsp; Main composer application file.

#### /flywork.sql

&nbsp; &nbsp; Sample database script.