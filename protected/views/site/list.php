<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>阿莱亚预约管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" >
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" type="text/css" href="/html/css/guest.css"/>
    <link rel="stylesheet" type="text/css" href="/html/css/font-awesome.min.css"/>
    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/html/js/guest.js"></script>
</head>
<body>
    <div class="">
      <div class="checkoption">
        <div>
          SEARCH CRITERIA
          <select id="allorders">
            <option value="firstname">名字</option>
            <option value="secondname">姓</option>
            <option value="sex">称呼</option>
            <option value="contacttype">希望联系方式</option>
            <option value="contact">联系号码</option>
            <option value="product">寻找的产品类型</option>
            <option value="brandname">寻找的品牌</option>
            <option value="status">状态</option>
          </select>
          <i class="fa fa-plus-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          SHOW：
          <select id="everypage">
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
          </select>
          <button class="btn-blue" id="searchbt" style="margin-left:80px;">Search</button>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <span id="sumtotal"></span>
          <span id="logout">Logout</span>
        </div>
        <div class="dataoption">

        </div>
        <div>
        </div>
      <div>
        <table border="1"  class="bespeaklist">
          <thead>
            <tr>
              <th>序号</th>
              <th>姓</th>
              <th>名字</th>
              <th>称呼</th>
              <th>希望联系方式</th>
              <th>联系号码</th>
              <th>寻找的产品类型</th>
              <th>寻找的品牌</th>
              <th>希望预约日期</th>
              <th>希望预约时间</th>
              <th>状态</th>
            </tr>
          </thead>
          <tbody>
<!-- bespeak list -->
<!-- bespeak list end -->
          </tbody>
        </table>
        <div class="bespeaklistfoot">
          <ul>
<!-- page list -->
<!-- page list end -->
          </ul>
        </div>
      </div>
    </div>
    <div class="tembox"></div>
    <div class="popupbox2"></div>
</body>
</html>
