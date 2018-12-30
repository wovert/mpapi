# 小程序接口开发

## 项目架构

- 三端分离
  - 服务端：ThinkPHP5 + MySQL 构建 REST API
  - 客户端：向客户端请求数据，完成自身行为逻辑
  - 管理端(CMS)：向服务端请求数据，实现发货与发送微信消息
    - 基础数据的CRUD，商品管理
    - 发送微信消息

- 基于 REST API
- 给予 Token令牌管理权限
  - 认证登录
  - 管理权限
- 适配 iOS/Android/MP/SPA
- APO面向切面编程
- 使用ORM(Object Relational Mapping)的方式与数据库交互
- MySQL 数据表设计与数据冗余的合理利用
- 用OO的思维构建前段代码 (ES6 Class & Module)

## TP5 特点

- Web框架三大核心知识（路由、控制器与模型）
- 验证器、读取器、缓存与全局异常处理
- ORM：模型与关联模型

### ORM 框架

- NodeJS: Sequelize
- Python: SQLAlchemy
- .Net: Entity Framework

### 依赖或者包管理

- composer
- npm
- pip

## 环境与工具

### 环境

- PHP 7.2
- MySQL
- Apache
- ThinkPHp5.0.23

### 工具

- PHPstorm
- 微信Web开发者工具
- PostMan
- Navicat

### ThinkPHP 5 安装

- Composer 安装
- Git 安装
- 直接下载

### ThinkPHP 5

- 应用项目 framekwork
- 核心框架 thinkphp

### 项目命名

- 接口：mpapi
- 小程序：mp
- 管理后台：mpadmin

### 项目目录结构

项目目录除了public目录之外其他目录不能访问

### TP5 自带的 Web server

``` 启动PHP web server
[development\mpapi\public ]$ php -S localhost:8080 router.php
```

## URL路径模式解析

### PATH_INFO

URL 路径格式：http://server/index.php/module/controller/action/[param/value...]

- 默认 URL不区分大小写
- 设置URL区分大小写
  - application -> config.php
    - `url_convert => false`
    - 推荐设置不区分大小写

- 缺点：
  - 太长
  - URL路径暴漏除了服务器额文件结构（模块名/控制器/行为）
  - 不够灵活（文件名和类名的限制）
  - 不能很好的支持URL语义化（最大的缺陷）
- 解决方案：路由解决问题

### 兼容模式

URL 路径格式：http://server/index.php?s=module/controller/action/[param/value...]

PATH_INFO 不支持的时候可以设置兼容模式

## 模块

### 新建模块

- application
  - sample
    - controller
      - Index.php
        - Namespace: app\sample\controller

- app 根命名空间
  - config.php
  - app_namespace => 'app'

### PHPStorm 自动生成命名空间

- Settings
  - Directories
  - 选择application目录和Sources，点击右边的生成的 application 弹出输入 Package prefix, 输入 app
