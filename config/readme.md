## 访问配置值
你可以使用全局辅助函数 `config` 在应用的任意位置访问配置值，该配置值可以文件名+”.”+配置项的方式进行访问，当配置项没有被配置的时候返回默认值：
```
$value = config('app.timezone');
```
如果要在运行时设置配置值，传递数组参数到 `config` 方法即可：
```
config(['app.timezone' => 'America/Chicago']);
```
更多可参照：
http://laravelacademy.org/post/2726.html