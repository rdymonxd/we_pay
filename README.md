RewriteEngine On
Options All - Indexes
RewriteRule ^([a-zA-Z0-9/ñÑ-]+)$ index.php?views=$1 
