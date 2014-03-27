#readerproxy

Author: zoowii


说明：本项目是供个人使用的小工具性质的网站，演示站点也只是一个简单的演示，无盈利目的。作者不负责任何与第三方有关的版权问题

一些各种资源下载站比如小说网（奇书等），音乐站（虾米等），从而避免各种网站的广告等麻烦，并且提供还可以的用户体验。


* 目前只支持奇书网和虾米网的搜索和下载，在线阅读等功能还在TODO
* 演示地址：[http://tools.zoowii.com](http://tools.zoowii.com)
* 使用了PHP 5.3+，composer做包管理，使用了自己实现的路由，使用了自己实现的ORM操作数据库（支持join fetch）。使用MySQL数据库，并且可以直接部署到SAE平台（需要先导入deploy目录下的sql文件）
* 已经支持QQ登录，但目前采用邀请制，只有邀请的拥有才可以使用本站点，并且部署时需要拷贝config.php.bak到config.php，并且修改其中的qq的key-secret，数据库信息等
* 路由功能已经从Pux转到自己实现的一个路由
* 实现了路由反转功能（url_for, reverse_url这类根据路由名称（或者controllerName, actionName,已经参数反向生成url））
* 支持保存搜索到的音乐文件到百度云存储
* 支持在线听歌（需要HTML5支持）

## TODO List
* txt文件存储到本系统中，并提供自动分章节功能
* 在线阅读，书签功能等
* 在线听歌，通过HTML5制作一个简单的播放器，在线播放
* 收藏资源
* 打包下载
* 记录各种日志，登录日志，下载日志，阅读日志，试听日志等，并再此基础上做些数据分析，给出推荐
* 存储到百度云存储、微云或者其他云服务
* 由数据库自动生成model类和或由model类自动生成数据库的工具
* ORM框架做优化（适合各种常见数据库，mongodb，GAE DataStore等）
* 优化在线音乐播放器(使用canvas或者dom自己画一个，或者网上找个好用的)
* 增加一个Application类，它的实例在全局可以获取，从而可以在任何地方获取到配置等信息
* 因为考虑到SAE不支持本地文件存储，所以可以考虑外部实习一个异步下载上传存储文件的服务，供PHP应用调用(不过SAE的下载速度还是非常快的，所以这个需求不强烈。但是以后其他地方也可能用到)
* 通过iframe嵌入外部应用，比如股票查看等
* 访问统计
* 国际化
