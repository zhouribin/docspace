
## 关于 DOC SPACE 

### 开箱即用:
- git clone 下来以后 项目根目录依次执行以下指令即可:
    - 1: composer install
    - 2: php artisan make:auth
    - 3: php artisan migrate
    - 4: php artisan larecipe:install
------
### 邮箱认证:
- 记得ENV里配置好你的 邮箱发送账号相关配置 MAIL_* 我们的文档系统是要对邮箱进行验证的!
------

### 只允许你团队的成员查看文档?
- 只需要在.env文件里配置IN_EMAIL_DOMAINS 使用 | 隔开
- 被配置的邮箱域 才能成功注册.
- 例如: IN_EMAIL_DOMAINS=abc.com|efg.com|hij.com
- 支持多个邮箱域名, 当然你也可以不配置,作为开放式的文档中心

------
### 关于编写文档:
- 只需要在resources/docs/*.0/ 里写MarkDown即可. 查考:[Larecipe](https://larecipe.binarytorch.com.my/docs/1.0/overview)

------

### 准备就绪,让我们开始快乐的写文档吧!~

------

### 开源鸣谢:

- 本项目基于 [Laravel](https://laravel.com/) 
- Docs 插件为 [Larecipe](https://larecipe.binarytorch.com.my/docs/1.0/overview)
- Demo 查考: [Demo](https://larecipe.binarytorch.com.my/docs/1.0/overview)