###### WITACM Online Judge 说明<br />**IHMoESu**<br />

[TOC]

# 开发说明

**使用能够在文件夹中搜索关键词的 IDE 极佳，在维护过程中时常需要追根溯源，找到某一个变量最初的设置位置，由于文件套娃严重，直接寻找不方便，推荐在整个网站所有源码目录下文件中搜索关键词寻找有用信息**

**前端页面中均使用前端标签“form”进行提交，查看提交后的去向查看 form 标签中的 action**

**<font color="red">如有心开发新 OJ，推荐使用 Python 或 JAVA 作为新后端，可以采用 Django(python) + Vue 的后前端组合类似于开源 OJ:青岛 OJ</font>**众所周知学校不教PHP

OJ 代码提交页面采用 **CodeMirror**，目前缺少用于切换代码高亮显示的 JavaScript。**<font color=green>此功能可以作为功能更新</font>**

## OJ的本地化搭建

在本地搭建OJ时与网站的搭建无差别，Mac与linux搭建类似，自行研究。

**<font size=5px color=red>注:</font>**

没有linux环境，想要在windows下开发存在以下三种方式：

1. 在windows的PHP小白开发工具中搭建，或自行使用PHP+MySQL+Nginx搭建

   此方法搭建后仅能正常显示部分网页，但部分功能不全，不适合开发，仅仅适合浏览

2. 在Windows的应用与程序中开启基于windows的linux子系统，并与应用商店安装你想要的linux（推荐Ubuntu18）

   子系统安装完成后，在子系统中搭建OJ，方法与linux相似

   此方法未测试

3. 于虚拟机下安装linux系统后，搭建OJ

## 文件目录结构说明

**目录**

**|-core（判题机源码）**

**|-install（安装时运行文件）**

**|-web（网页 PHP 源代码）**

  **|-admin（用于存放管理员页面信息）**

  **|-pages（用于管理员页面的前端）**

  **|-api（用于存放一些需要调用的 API）**

  **|-include（用于存放网站的设置与自定义函数）**

  **|-存放网页的翻译**

  **|-pages（用于存放页面前端，下文会说明）**

  **|-qq（存放 qq 登录调用，貌似目前没用）**

  **|-static（存放网站所需要的 js、css 等文件与框架）**

### Web 与 web/pages 下 php 页面说明

这两个目录中的文件一一对应，对应的 php 名称也许不一致，但可以从前面得代码中找到器对应的网址。web 中的文件为访问时与数据库等后天信息交互是获取数据的文件，之后会转到 web/pages 下的页面进行显示。

**about.php（关于页面）**

**category.php（category 页面****）**

**contest.php（比赛信息显示）**

**contest_listtopic.php（字面意思）**

**contest_problem.php（字面意思）**

**contest_problemset.php（字面意思）**

**contest_ranklist.php（字面意思）**

**contest_status.php（字面意思）**

**contest_user.php（字面意思）**

**contest_viewtopic.php（字面意思）**

**contestlist.php（比赛列表）**

**discuss.php（Forum）**

**document.php（常见问题）**

**error_view.php（提交代码后出错，错误信息显示）**

**forget.php（忘记密码）**

**index.php（主页）**

**joinus.php（加入我们功能）**

**login.php（登录）**

**mail.php（邮件系统）**

**modifyinfo.php（目前无）**

**news.php（新闻）**

**newslist.php（新闻列表页面）**

**problem.php（问题主页）**

**problemset.php（问题列表）**

**problemstatistics.php（问题总体信息）**

**problemsubmit.php（问题的提交）**

**rank.php（排名）**

**ranklist.php（排名列表）**

**recent_contest.php（即将开始的比赛）**

**register.php（注册）**

**reset.php（重置）**

**source_view.php（得分查询）**

**status.php（及时提交信息）**

**thread.php**

**upgrade.php（网站升级信息）**

**userinfo.php（用户个人信息）**

### **web/admin 与 web/admin/pages 下 php 页面说明**

这两个目录与前文目录一样，呈现一一对应状态，对应的 php 名称也许不一致，但可以从前面得代码中找到器对应的网址。

**account_gen.php（账号生成器，现在有问题，生成账号直接脚本操作数据库，或者把这个功能修好）**

**broadcast_editor.php（首部广播编辑）**

**change_userid.php（改变用户的 id）**

**contest_add.php（比赛增加）**

**contest_editor.php（比赛编辑）**

**contest_list.php（比赛列表）**

**contest_manager.php（比赛管理）**

**contest_sim.php（查询比赛中的代码相似度）**

**index.php（管理员主页）**

**news_editor.php（新闻编辑）**

**news_manager.php（新闻管理）**

**privilege_add.php（管理员增加）**

**privilege_manager.php（管理员管理）**

**problem_add.php（题目增加）**

**problem_changeid.php（题目改 id）**

**problem_copy.php（题目复制）**

**problem_data.php（题目数据上传与显示）**

**problem_editor.php（题目编辑）**

**problem_import_file.php（从文件上传题目）**

**problem_import_url.php（从网址上传题目）**

**problem_judge.php（判题）**

**problem_list.php（题目列表）**

**problem_manager.php（问题管理）**

**problem_rejudge.php（重盘问题）**

**reset_password.php（重置密码）**

**source_sim_view.php（相似代码查看）**

**users.php（协会成员查看）**

### api 下 php 页面

app 下页面与之前的页面有着对应关系，这里就不做过多说明，从之前的页面中的 form 中找到这里就能找到对应的功能

其中 ajax 为异步同步信息功能

**ajax_contest_log.php**

**ajax_discuss.php**

**ajax_mail.php**

**ajax_newsinfo.php**

**ajax_newslist.php**

**ajax_problemdata.php**

**ajax_problemset.php**

**ajax_status.php**

**ajax_status.php**

**change_userid.php**

**contest_log.php**

**contest_mod.php**

**contest_register.php**

**contest_state.php**

**gen_identicon.php**

**logout.php**

**news_editor.php**

**news_state.php**

**pic_upload.php**

**privilege_add.php**

**privilege_mod.php**

**prob_state.php**

**problem_changeid.php**

**problem_export.php**

**problem_mod.php**

**problem_rejudge.php**

**problem_submit.php**

**reset_password.php**

**sendmail.php**

**upload.php**

**user_login.php**

**user_modifyinfo.php**

**user_register.php**

**user_resetpwd.php**

### include 下 php 页面

**PHPMailer.php** 

**Parsedown.php SMTP.php (SMTP 功能)**

**UploadFile.class.php (文件上传)**

**admin_head.inc.php (管理员页面的表)**

**checkauth_post.php (作者检查函数)**

**common_const.inc.php  (通用常量，调用语言文件的常量，用于规定名称)**

**common_functions.inc.php (通用函数)**

**common_head.inc.php (通用的头)**

**common_head.inc.php.bak config.php (网站信息设置，包括链接数据库名称，数据库密码，网站名称等信息)**

**contest_functions.inc.php   (比赛页面函数)**

**file_functions.php (文件操作函数)**

**lo gin _funct ion s.php (登录函数)**

**memcache.php (缓存，当前该功能插件跟不上 php 版本，在新版 php 中需要在设置中关闭该功能)**

**pagea uth _ get.php (页面作者获取)** 

**pageauth _po st.php   (页面作者提交放)**

**refresh.php (刷新，被 ban 的 ip 要改动此目录下 forbid 的一个文件(不是 txt 文件)，把对应的 ip 删掉即可)**

**safe_func.inc.php (网站安全函数)**

**setting_db.inc.php (网站数据库的设置)**

**setting_oj.php (网站设置)**

**user_check_functions (登录信息 检查函数集合)**

**waf.php**

# 维护说明

**WITACMOJ** 是 基 于 HUSTOJ 二次开发 的 OJ，后端语言使用 PHP，OJ 运行时部分问题，与HUSTOJ相似

**服务器出现问题时首先查看/home/judge/log/下的文件：**

##  已知问题（其他问题解决后添加其中）

### 当 JAV 或Python语言代码运行无论如何 都为 RE

此时的 log 文件显示类似为：

>Runtime Error:[ERROR] A Not allowed system call: runid:2501 CALLID:104
>TO FIX THIS , ask admin to add the CALLID into corresponding LANG_XXV[] located at okcalls32/64.h ,
>and recompile judge_client.

根据提示，我们需要依据操作系统位数，找到 **okcalls32.h** 或**okcalls64.h**

具体文件在/home/judge/src/core/judge_client/

其中

```c++
int LANG_JV[256] ={0,...........,0}
```
这个数组 J 表示 **JAVA**，同理 Y 表示 **Python**
此时我们只需要将报错中的 CALLID 加入其中即可，比如 104

**DEMO:**

```c++
int LANG_JV[256] ={0,104,..........,0}
```
然后重新编译覆盖 judge_client 到/usr/bin/judge_client
**方法：**

在 core 目录下运行

```shell
sudo bash make.sh
```
然后继续运行代码，如果继续 RE，同样的查看把新出现的 CALLID 加入其中，直到不发生报错为止。

如果觉得一个一个找太麻烦，更进一步以 debug 模式+采样模式运行（采用这种方法添加后如果还有错误，请继续使上述方式）：

```shell
sudo judge_client 2501 0 /home/judge debug  J 
```
J 表示 **JAVA**，同理Y表示**Python**
将会在输出的末尾看到：

```c++
resxlt=4
int LANG_JV[256]={0,2,3,4,273,0};
```

把这个数组的内容整合进入okcalls64.h或okcalls32.h

### 安装 OJ 后图标等不能正确显示

在 config.php 中设置讲 memcache 选项关闭。

# 搭建说明



**<font color=blue size=5px>服务器源码:</font>**[IvyHole/witacmoj: V1.0 (github.com)](https://github.com/IvyHole/witacmoj)

WITOJ 的 judge 程序只能在 Linux 内核环境下运行，我推荐Ubuntu版本在16或者以上的操作系统，接下来的例子也都在 Ubuntu 16 的环境中。

> 接下来这个步骤全部是手动操作，你需要一定的Linux基础，在你了解具体原理之后可以尝试写一个专属的自动化脚本。

## 系统准备

你可以选择阿里云或者腾讯云的云服务器或者轻量应用服务器，系统选择 Ubuntu Server 18。当然，如果你熟悉其他的Linux发行版本也可以根据需要在其他版本上安装。

你需要了解基础 的Linux命令行操作，接下来全部操作都是在命令行下完成。

## 依赖软件包安装

你需要执行命令安装以下依赖和软件：

```shell
sudo apt-get update && sudo apt-get install -y make flex g++ clang libmysqlclient-dev libmysql++-dev php-fpm php-common php-xml-parser nginx mysql-server php-mysql php-gd php-zip fp-compiler openjdk-8-jdk mono-devel php-mbstring php-xml
```
## 创建新用户

创建名字叫judge用户，之后 judge 程序就以judge的身份运行

```shell
sudo useradd -m -u 136 judge
```
进  入judge文件夹内，并且创建几个重要的文件夹。
```shell
cd /home/judge && mkdir etc data log src run0 run1 run2 run3
```
## 获取代码

首先你需要安装git客户端，因为我们的核心代码放在git仓库中。

```plain
sudo apt-get instal -y git
```
获取到WITOJ的代码：
```plain
cd && git clone -b master --depth=1 https://github.com/IvyHole/witacmoj.git
将代码放在src文件夹
sudo cp -r ./witacmoj/* /home/judge/src
```
## 编译部署 judge 程序

```plain
cd /home/judge/src/core/
sudo sh make.sh
sudo cp ./judged.srvice /lib/systemd/system
sudo systemctl enable judged.service
```
## 数据转移

* 转移数据库将原服务mysql上的jol数据库导出再到新的服务器上，mysql数据库导入可以用带的mysqldump程序。
* 转移网站图片数据将原来服务器`/home/judge/srcweb/uploads`下面的文件复制到新服务器当前同样的目录下
* 转移题目数据将原来服务器`/hom/judge/data`下的文件全部复制到新服务器当前同样的 目 录下
## 修改Nginx配置  

Nginx配置文件在 `/etc/nginx/sites-enabled/default` 打开修改类似如下，你应该知道这是什么。

```c++
listen 80 default_server;
listen [::]:80 default_server;
root /home/judge/src/web;
location /recent-contest.json {
proxy_pass http://contests.acmicpc.info/contests.json;
}
index index.html index.php index.htm index.nginx-debian.html;
location / {
try_files uriuri/ =404;
 } 
#   设置php文件的转发
location ~ \.php$ {
include snippets/fastcgi-php.conf;
  # sock文件 名 字可  能根据php的版本不同而不同，记得修改
fastcgi_pass unix:/run/php/php7.0-fpm.sock ; 
}
```
## 修改WITOJ配置

### 修改给判题机的配置文件

首先将配置文件复制到正确目录下

```
sudo cp -r /home/judge/src/install/etc/* /home/judge/etc
```

打开/home/judge/etc/judge.conf 在第二行，需要 修改的是你 的 mysql 服务器的用户名和密码

```php
OJ_USER_NAME="你的mysql用户名"
OJ_PASSWORD="你的mysql密码"
```

### 修改网站的配置文件

网站的配置文件在`/home/judge/src/web/include/config.php` , 同样在第49行，修改的是你的mysql服务器的用户名和密码

```php
$SQL_DB_USER = "你的mysql用户名";
$SQL_DB_PASS = "你的mysql密码";
```
> 由于在最新版PHP中对memcache中支持性不好，所以在config.php中设置讲memcache选项关闭。
>细节可以参考之前服务器上的配置。
## 启动



```plain
sudo systemctl start judged
sudo systemctl restart nginx
```

# 使用说明

网页为提交软著时中文界面，英文界面自行对照

## 题目数据上传说明

将题目数据打包为ZIP格式，采用1.in与1.out格式表示测试样例1输入与测试样例1输出，将所有文件打包至ZIP根目录下。

## 网页启动

![OJ主页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image001.png)

主界面上部区域用于不同的功能，“主页”为当前页面，”题目列表”为目前的题目列表，”状态”为测评结果，”排行榜”为目前题目测评数量，“竞赛/作业”为比赛列表，“更多”中有更多功能，如论坛，新闻等，左边为登录与注册，页面中央为News加今日OJ使用情况表。

## 3.2注册与登录

在主界面左上角“注册”进行注册，注册页面。

![注册页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image003.png)

我们在注册页面中需要填写学生号，昵称，密码与邮箱，进行注册，注册成功后，点击登录可计入登录页面，登录页面，填入注册用的学生好，与密码登录。

![登录页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image005.png)

## 题目浏览

​    在上方的菜单栏中选择“题目列表”即可进入题目列表页面，如图4所示，在没有题目时，页面空空如也，此处演示有题目的列表。

![题目列表页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image007.png)

​    在题目前的对号表示，你已经完成了此题目，ID为当前题目序号，“题目”为题目名称，“难度”题目难度度，“来源”为题目的分类，AC/提交 为题目的提交数量与通过的比例。我们以1000题为例，单击题目可以打开此题。

![1000题题目详细](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image009.png)

​    页面正中间从上至下分别为题目名称，代码时间限制，空间限制，提交数量，通过数量，提交代码按钮，已通过按钮，当你为题目管理员时会有“编辑”按钮，既可以编辑题目信息与测试样例，以及论坛讨论按钮。从上到下分别为，题目信息，代码输入，代码输出，样例输入，样例输出，提示与分类。

​    题目的“状态”中显示关于此题目的很多信息。

![题目详细](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image011.png)

 页面中，左边一栏从上到下为此题目的通过数目，提交数目，已经不同的测评结果的数目，下面为用户提交饼图，可视化每种测评结果的比例。

 

## 题目提交与测评

​    单击题目信息的“提交”按钮即可进入题目提交代码页面。

![代码提交页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image013.png)

从上至下分别为题目ID，你提交的语言，可选择Python，C/C++，Java，下面为代码输入框，以及提交按钮，将你的代码填入中间的输入框，进行提交，此处我们简单的写一段A+B的代码测试提交，提交后自动跳转“状态”页面，此页面你可以看到自己的代码提交结果。

![代码提交演示](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image015.png)

其中可以通过题目ID，用户ID，语言，以及通过情况来寻找对应的提交数，判题机会给出以下几种测试结果，通过，答案错误，编译错误，运行超时，超出内存限制，运行时错误，超出输出限制，格式错误，他们对应不同的提交情况。

## 比赛的浏览

在页面上方选择“竞赛作业”即可进入比赛详细页面，如图9所示，与题目列表类似，没有数据显示为空。

![竞赛页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image017.png)

显示信息分别为比赛ID，比赛标题，比赛时间，比赛的公开程度，拥有者ID，单击比赛标题即可进入比赛页面。

![比赛页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image019.png)

此页面显示本次比赛的信息，其他均与主页面的各功能一致。

## 排名显示

单击主页面上的”排行榜”，即可进入积分排名页面。

![比赛Rank页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image021.png)

“排名”代表当前用户的当前排名，“签名”代表座右铭，“通过率”代表个人代码总通过率。

## 个人信息显示与修改

登录后主页面右边用户名下方的子菜单中“用户主页”为个人信息页面。

![个人信息页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image023.png)

图中主要有3块区域构成，第一块个人头衔昵称，邮箱显示，第二块显示通过的题目数，提交数量以及各种测评结果的数据与饼图，以及当前已经AC的题目。

同样的主页面子菜单中有“修改信息”，即可进入用户信息修改页面。

![个人信息修改页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image025.png)

其中可以修改自己的昵称，座右铭，真实姓名，专业，学校，电子邮箱，密码，如果需要修改密码，便可填入新密码。

## 管理员页面

如果自己是网站的出题者或新闻编辑者或管理员，字用户子菜单中有control Panel选项，即可进入管理页面。

![管理页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image027.png)

左侧为管理内容，右侧为当前网站的信息。

## 编写题目或竞赛

在管理员页面下有管理问题与添加竞赛两个选项，管理页面单击后会出现 题目的编辑页面，增加竞赛页面。

![管理问题](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image029.png)

![竞赛添加页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image031.png)

在竞赛添加页面下，对应的英文属性为对应的内容。问题添加页面与竞赛添加页面大同小异，此处不做展示。

## 新闻管理页面

​    新闻管理页面。

![新闻页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image033.png)

![广播页面](https://gitee.com/ihmoesu/ihmoesu_images/raw/master/clip_image035.png)

新闻页面可以添加新闻，广播页面使用HTML语言或markdown语言编写广播，可以显示在首页的正中间。

## 注意事项

1.      使用过程中可能会出现无法注册的现象，问题为当前用户已被注册。

2.      当“状态”页面显示“排队”时，为正常现象。

