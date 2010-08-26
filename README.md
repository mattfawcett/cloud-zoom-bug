Example to show a bug in Cloud Zoom
===================================

The issue
---------
Cloud Zoom makes an unnecessary HTTP request to the root of your current folder

Steps to reproduce
------------------
- Put this folder somewhere served by a webserver
- The webserver should support php and going to a folder index should by default run files with name of index.php
- View the demo.html in your browser eg [http://localhost/cloud-zoom-bug/demo.html](http://localhost/cloud-zoom-bug/demo.html)
- The bug in cloud zoom will make a GET request to the root of the folder (eg http://localhost/cloud-zoom-bug)
- The index.php file gets executed creating a text file on disk (presuming permissions are setup correctly)

Update
------
- Removing `background-image:url(\".\");` from line 173 appears to fix the issue