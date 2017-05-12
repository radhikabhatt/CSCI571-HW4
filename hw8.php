<?php

   header('Access-Control-Allow-Origin: *'); 
   // header('Content-type: application/json');

  if(isset($_GET['q'])){
    
    $name = $_GET['q'];

    $url = "http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=$name";
    $result = @file_get_contents($url);
    print_r($result);
  }

  if (isset($_GET["chart"])){
    $input = $_GET["chart"];            
    print @file_get_contents("http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=%7b%22Normalized%22:false,%22NumberOfDays%22:1095,%22DataPeriod%22:%22Day%22,%22Elements%22:%5b%7b%22Symbol%22:%22$input%22,%22Type%22:%22price%22,%22Params%22:%5b%22ohlc%22%5d%7d%5d%7d");    
  }

  if (isset($_GET["sym"])){
    $sym = $_GET["sym"];
    print @file_get_contents("http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=$sym");
  }

  // if (isset($_GET['stock'])){

  //   $name = $_GET['stock'];
  //   $url = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=$name";
  //   $result = json_decode(@file_get_contents($url));
    
  //   if(($result->Status) == 'SUCCESS'){
  //     echo "<table class='table2 stock_table table table-striped table-bordered' id='stock_info_table'><tr><th>Name</th><td>". $result->Name . "</td></tr>";
  //     echo "<tr><th>Symbol</th><td>". $result->Symbol . "</td></tr>";
  //     echo "<tr><th>Last Price</th><td> $". round($result->LastPrice,2) . "</td></tr>";

  //     echo "<tr><th>Change(Change Percent)</th><td>". $result->Change. "(". round($result->ChangePercent, 2) . ")%";
  //     if($result->ChangePercent < 0){
  //       echo "<img src=\"http://cs-server.usc.edu:45678/hw/hw8/images/down.png\" height='20px' width='20px'></img>";
  //     }
  //     if($result->ChangePercent > 0){
  //       echo "<img src=\"http://cs-server.usc.edu:45678/hw/hw8/images/up.png\" height='20px' width='20px'></img>";
  //     }
  //     echo "</td></tr>";
      
  //     date_default_timezone_set('America/New_York');
  //     echo "<tr><th>Time and Date</th><td>".date("Y-m-d  H:i A", strtotime($result->Timestamp)). " EST";
  //     echo "</td></tr>";
    
  //     $marketcap = $result->MarketCap;
  //     echo "<tr><th>Market Cap</th><td>". round(($marketcap/1000000000), 2) . " Billion";

  //     echo "</td></tr>";
      
  //     echo "<tr><th>Volume</th><td>". $result->Volume;
  //     echo "</td></tr>";

  //     echo "<tr><th>Change YTD (Change Percent YTD)</th><td>". $result->ChangeYTD. "(". round(($result->ChangePercentYTD), 2) . ")%";
  //     if(($result->ChangePercentYTD) < 0){
  //       echo "<img src=\"http://cs-server.usc.edu:45678/hw/hw8/images/down.png\" height='20px' width='20px'></img>";
  //     }
  //     if(($result->ChangePercentYTD) > 0){
  //       echo "<img src=\"http://cs-server.usc.edu:45678/hw/hw8/images/up.png\" height='20px' width='20px'></img>";
  //     }
  //     echo "</td></tr>";

  //     echo "<tr><th>High Price</th><td>$". round($result->High,2) . "</td></tr>";

  //     echo "<tr><th>Low Price</th><td>$". round($result->Low,2) . "</td></tr>";

  //     echo "<tr><th>Opening Price</th><td>$". round($result->Open,2) . "</td></tr></table>";
  //   }else{
  //     $error = '<div id="err">Select a valid entry.</div>';
  //     echo $error;
  //   }
  // }
?>