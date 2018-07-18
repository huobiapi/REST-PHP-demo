# 火币REST API请求库
## 用法参考demo.php
## lib.php已经定义了一些基本方法, 如果要添加新方法,按照火币文档加入就行 https://github.com/huobiapi/API_Docs/wiki/REST_api_reference
```
// 添加新方法需要定义的参数

// REST接口地址
$this->api_method = "/v1/...";
// REST请求方法 一般为GET或POST
$this->req_method = 'GET';
// 请求参数 根据文档要求定义
$postdata = [
	'parama' => '123'
];
// 参数配置完毕后调用create_sign_url方法生成验签URL 然后curl方法发起请求并获取返回值
$url = $this->create_sign_url();
$return = $this->curl($url,$postdata);
```