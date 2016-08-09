# \<image-picker\>

# USE:

## Add the following inside <head>

```
<base href="https://image-picker-dinethh.c9users.io/" />
<script src="/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
<link rel="import" href="/src/image-picker/image-picker.html">
```

## Place the following tag where you need to embbed the application

```
<image-picker></image-picker>
```

## Copy the following folders to your project folder

```
/bower_components
/src
```

## Update /src/db.php 

# Changes made to the SQL

## get-categories.php [GROUP BY bsc.id => GROUP BY bc.id]

