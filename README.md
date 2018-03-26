# Custom-MVC-Framework

## What is it?

>Similar to REACT, Angular or Laravel, this is a "boilerplate" Custom MVC Framework written in PHP. Please refer to the docs below on how to implement.

### MVC File Structure

`
├── config
│   ├── connection.js
│   └── orm.js
│ 
├── controllers
│   └── _controller.js
│
├── db
│   ├── schema.sql
│   └── seeds.sql
│
├── models
│   └── model.js
│ 
├── node_modules
│ 
├── package.json
│
├── public
│   ├── assets
│   │   ├── css
│   │   │   └── style.css
│   │   └── img
│   │       └── images.png
│   └── index.php
│
├── server.js
│
└── views
    ├── view1
    └── layouts
        └── layout1

`

### How to Implement

1. Clone down this repo.
2. Update server settings in config/config.php
3. Update `SITENAME` on line 4 `RewriteBase` in public/.htaccess
4. Build Models in the model folder according to the model example provide. (*example model not to be included "as is" in your project*)

#### License *MIT*
