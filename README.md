<h1>Smog sensor page with statistics, written fast</h1>
<h2>Hardware</h2>
I used ESP8266(nodemcu) and few sensors like: DTH11 (it's a poor sensor), BMP180 and to smog sensor SDS011. <br>
<b>Connection</b><br>
<img src="smogsensor/pictures/scheme.png"><br>
<h2>Software</h2>
For ESP I install <a href="https://github.com/letscontrolit/ESPEasy">ESPEasy</a> firmware. <br>
<b>You might install testing version of ESP to get SDS011 device options</b><br>
<b>Devices</b>
After install firmware and connection and configuration devices like this - you can name it different, but script checking names of devices<br>
Please set different time of delay for each device - if they start sending data at the same time, you can have problem with parameters - later I will try to solve this problem.<br>
<br><b>Controllers</b>
I create new controller as Generic HTTP<br>

Controller Hostname: - address of your page with script<br>
Controller Publish: - API with data.<br>
You can set there your password, same like in config in the script<br> 

index.php?s=update&name=%sysname%&task=%tskname%&valuename=%valname%&value=%value%&pass=<i>YOUR PASSWORD FROM CONFIG</i><br> 
<h3>Page</h3>
<b>Database</b><br>
<code>
CREATE TABLE `records2` (
  `id` int(128) NOT NULL,
  `device` text NOT NULL,
  `val1` decimal(6,2) NOT NULL,
  `valname1` text NOT NULL,
  `val2` decimal(6,2) NOT NULL,
  `valname2` text NOT NULL,
  `val3` decimal(6,2) NOT NULL,
  `valname3` text NOT NULL,
  `datatime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin2;
</code><br>
<b>Config</b><br>
$devicePasword  - You have to have same password like in URL<br>
$timeZone - If your server works in different time zones, just write the difference of time between them<br>
$delayOnUpdate - if your internet/server is so slow, you should increase this, but not a big amount of time<br>
$differenceBetweenUpdate - if you don't want too much data in your database, you can block it on the period of time<br>
<h2>Demo</h2>
You can check demo <br>
<b><a href="https://mzielinski.pl/smog/">https://mzielinski.pl/smog/</a>
