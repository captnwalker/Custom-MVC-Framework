# Custom-MVC-Framework

## What is it?

>Similar to REACT, Angular or Laravel, this is a "boilerplate" Custom MVC Framework written in PHP. This framework does include PDO to help prevent SQL injection. Please refer to the docs below on how to implement.

### How to Implement

1. Clone down this repo.
2. Create your own SQL server in phpAdmin
3. In `config/config.php` update server settings with your settings
4. In `public/.htaccess` update `SITENAME` on line 4 of `RewriteBase`
5. Build Models in the model folder according to the model example provide. (*example model not intended to be included "as is" in your project*)
6. Open your project folder in browser `localhost/_YOUR_PROJECT_FOLDER_/pages/`

### MVC File Structure

```
app
├── config
│   └── connection.php
│ 
├── controllers
│   └── controller.php
│
├── models
│   └── models.php (*example included*)
│ 
├── libraries
│   ├── controller.php
│   ├── core.php
│   └── database.php
│ 
├── package.json (*if dependencies are desired*)
│
├── helpers
│
├── views
│   ├── inc
│   │   │── header.php
│   │   └── footer.php
│   └── pages
│       │── about.php
│       └── index.php
public
├── js
│   └── main.js
├── css
│   └── styles.css
├── img
│   └── images.png
├── index.php
├── .htaccess
│
.htaccess

```

---

#### License *MIT*
