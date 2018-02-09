# project6
本机与浏览器校验工具，可以用本地动态密码与后台生成密码校验用户为本人操作。
 
YuxuanWang-CHINA 
动态密码生成器

	前台的index.php文件是用于用户登录页面，会获取用户位置，ip等信息，传至后台的admin.php页面，admin.php处理数据并按一定方式MD5编码。

	独立的文件pc.html应存于用户的移动存储中，打开会根据位置，ip等信息生成MD5编码。

	用户从pc.html得到的编码输入至index.php中，传入后台与admin.php生成的结果进行校验，若一致，则验证成功。

	MD5编码是会随用户位置，ip，时间共同组成的，会经常改变，安全性就提高。

项目之中依赖于：

	BaiduMap的定位，需申请密钥【免费】，并在index.php和pc.html相应位置输入。

	Sohu的ip获取【免费】；

	jquery；
