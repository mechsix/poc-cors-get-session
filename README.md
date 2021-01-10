## CORS static GET requests POC

## Launch

1. Launch Download Site

```
cd download_site
php -S localhost:3001
```


2. Forward download site to HTTPS with ngrok

```
ngrok http 3001

# get the ngork https url from command output
```

3. Change base_url of client_site

```
vim client_site/index.php

Change $download_site_url with the value from step 2

```


4. Launch client_site

```
cd client_site
php -S localhost:3000
```

5. Access the client site from browser with url: http://localhost:3000
