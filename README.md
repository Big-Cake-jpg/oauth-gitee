# 使用 Gitee 登录

## 注意

本插件没有配置页面，所有操作都需要你自行在 .env 中配置

在开始前，请检查你创建 OAuth 应用的 Gitee 账号是否绑定手机号

## 步骤
1.在 https://gitee.com/oauth/applications/new 新建应用

> 应用主页示例：http(s)://skin.test.com/（ skin.test.com 更换为你的域名，协议头根据自己情况填写 http/https ）

2.在 .env中新增三条配置：GITEE_KEY（对应 Client ID）、GITEE_SECRET（对应 Secret Key）、GITEE_REDIRECT_URI（对应 “回调地址”）

## 示例（不要复制粘贴）
GITEE_KEY=236823768138348659846312

GITEE_SECRET=dseif8561732469hdq1ri

GITEE_REDIRECT_URI=https://skin.test.com/auth/login/gitee/callback