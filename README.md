# zdir
使用PHP开发的目录列表程序

![](https://imgurl.org/upload/1806/349f3b54028d58d6.png)

### 使用方法
* 下载源码放到站点根目录
* 将`config.simple.php`修改为`config.php`
* 修改`config.php`设置自己的网站标题/关键词/描述
* 如果需要排除某个目录，再次修改`config.php` ，里面有说明
* 更多说明请查看帮助文档：[https://doc.xiaoz.me/#/zdir/](https://doc.xiaoz.me/#/zdir/)

### 主要功能
- [x] 目录浏览
- [x] MarkDown文件预览
- [x] CSS/JavaScript一键复制
- [x] 文件hash
- [x] 图片预览
- [x] 视频播放（仅支持mp4格式）
- [x] 文本查看器（支持的格式有.txt .sh .py .go .c .cpp）
- [x] Office在线预览（支持.doc .docx .xls .xlsx .ppt .pptx）
- [x] 文件索引
- [x] 二维码生成
- [x] 文件删除
- [x] 文件搜索
- [ ] 文件上传
- [ ] 密码验证


* 详细说明请访问： [Zdir 实用的目录列表程序](https://www.xiaoz.me/archives/10465)


### 魔改优化
* 调整原作者的目录层级
* 现在您只需要将存放的文件夹信息和最外层index.php 保持同一层级即可
* 修复了原作者在对目录的处理时对php ./ 目录的错误处理
* 删除了原作者的滚动通知消息

