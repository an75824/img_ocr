# img_ocr
This is an experimental system that sends images to an OCR application.
You need to intall <b>tesseract-ocr</b> in order to use this demo.
### Installation
Just clone the code and make sure that you have the below code in Apache's configuration file (/etc/apache2/apache2.conf):<br />
```
<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride all
        Require all granted
</Directory>
```
### Use this demo
1) Add the words that you would like to search for in <code>document_root/products.json</code><br /.
2) upload any image (jpg, png, tiff) and wait for the result

### Limitations
It uses the <code>/tmp</code> folder in order to store the uploaded images and generate the text files. It is not a good practise but remember it is only a demo!
