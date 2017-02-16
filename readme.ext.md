#### .evn.*文件说明
`Laravel`默认使用`.env`做为配置文件，如果需要使用其它的配置文件，  
可以通过设置WEB服务器环境变量来更改其它的配置文件。

如果，我配置让`Larval`加载`.env.example`而非`.env`文件，那么，你至少需要：
1.修改`config/app.php`:
```
'env' => env('APP_ENV', 'example'),
```

2.配置`web`服务器，`Apache`或者`Ngnix`的环境变量  
在`Apache`，可以通过以下配置：
```
<VirtualHost *:8000>
SetEnv APP_ENV production
...
```
在`Nginx`中，可能通过以下配置:
```
fastcgi_param APP_ENV production;
```
配置完成后，重启服务器，可以在`phpinfo()`中的`Environment`找到`APP_ENV`则说明配置成功了.  