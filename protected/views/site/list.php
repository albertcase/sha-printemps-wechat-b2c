<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>法国春天百货管理</title>
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
            <option value="firstname">First Name</option>
            <option value="secondname">Family Name</option>
            <option value="cardno">Tour Guide No.</option>
            <option value="bak">Region</option>
            <option value="openidd">Logined</option>
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
              <th>No.</th>
              <th>First Name</th>
              <th>Family Name</th>
              <th>Tour Guide No.</th>
              <th>Region</th>
              <th>Logined</th>
              <th>LoginDate</th>
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
