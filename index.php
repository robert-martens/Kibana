<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Kibana</title>
  <script type="text/javascript" src="js/lib/excanvas.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.history.js"></script>
  <script type="text/javascript" src="js/lib/jquery.flot.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.flot.selection.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.smartresize.js"></script>
  <script type="text/javascript" src="js/lib/iso8601.min.js"></script>
  <script type="text/javascript" src="js/lib/base64.js"></script>
  <script type="text/javascript" src="js/lib/jquery-ui-1.8.16.custom.min.js"></script>
  <script type="text/javascript" src="js/lib/jquery.ui.datepicker.js"></script>
  <script type="text/javascript" src="js/lib/jquery-ui-timepicker-addon.js"></script>
  <script type="text/javascript" src="js/lib/jquery.ui.accordion.js"></script>
  <script type="text/javascript" src="js/lib/json2.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>

  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-dropdown.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
  <LINK REL=StyleSheet HREF="css/style.css" TYPE="text/css" MEDIA=screen>
  <LINK REL=StyleSheet HREF="css/jquery-ui-1.8.16.custom.css" TYPE="text/css" MEDIA=screen>
  <LINK REL=StyleSheet HREF="css/jquery.ui.datepicker.css" TYPE="text/css" MEDIA=screen>
  <style type="text/css">
    body {
    padding-top: 65px;
    padding-bottom: 40px;
    }

  </style>
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>


<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
    <div class="container-fluid">
      <form id='searchform' class="form-search form-horizontal" action="">
        <img src='images/logo.png'>
        <select name="time" id=timeinput class="input-small">
          <option value="15 minutes">Last 15m</option>
          <option value="60 minutes">Last 60m</option>
          <option value="4 hours">Last 4h</option>
          <option value="12 hours">Last 12h</option>
          <option value="24 hours">Last 24h</option>
          <option value="48 hours">Last 48h</option>
          <option value="7 days">Last 7d</option>
          <option value="100 years">All Time</option>
          <option value="custom">Custom</option>
        </select>
        <input size=19 id=timefrom type=text name=timefrom value="" />
        <input size=19 id=timeto type=text name=timeto value="" />
        <input type="text" placeholder="Search" id=queryinput />
        <input type="hidden" id=fieldsinput />
        <button class="btn btn-primary" type=submit>Search</button>
        <button class="btn btn-danger" type="reset" id=resetall>Reset</button>
        <div id=meta></div>
      </form>
    </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class=row-fluid>

    <div class="span2" id=sidebar>
      <div class="sidebar">
      <div class="well">
        <div id=fields></div>
        <div id=analyze></div>
      </div>
      </div>
    </div>

    <div class="content span10" id=main>
      <div>
      <div class=row-fluid>
        <div class="span1">
          <i id=sbctl class="icon-chevron-left jlink"></i>
        </div>
        <div class="span1"><div id=feedlinks></div></div>
      </div>
      <p id=graphheader></p>
      <div id=graph style='height: 100px;'>
        <div class=hero-unit>
          <h1><img src=images/kibana_banner.png></h1>
          <br><br>
          <p><strong>Welcome to Kibana.</strong> Give me a few moments, I'm fetching some interesting data to display. It might be a minute, there could be lots of data in here. Consider the thousands, millions or billions of events I might be looking through, to find just the right ones for you. It's nothing, really. You're welcome.
          </p>
        </div>
      </div>
      <div id=legend></div>
    </div>
    <br>
    <div class='pagelinks'></div>
    <div id=logs class=zebra-stripped></div>
    <div class='pagelinks'></div>
    </div>
    </div>
  </div>

  </body>



</html>
