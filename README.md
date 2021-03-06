<h1>Smog sensor page with statistics</h1>
<h2>Hardware</h2>
I used ESP8266(nodemcu) and few sensors like: DTH11 (it's a poor sensor), BMP180 and to smog sensor SDS011. <br>
<b>Connections</b><br>
<img src="https://raw.githubusercontent.com/zielu92/smogsensor/master/pictures/scheme.png"><br>
<h2>Software</h2>
Install <a href="https://github.com/letscontrolit/ESPEasy">ESPEasy</a> firmware. <br>
<b>You might need to install testing version ESP to get SDS011 device options</b>
You can do it by comment #define PLUGIN_BUILD_NORMAL and uncomment #define PLUGIN_BUILD_TESTING<br>
<b>Devices</b><br>
After flashing firmware and connect device into ESP, Please configurate devices like bellow - you can name it different, but script checking names of devices (check config/devices.php)<br>
<img src="https://raw.githubusercontent.com/zielu92/smogsensor/master/pictures/screen1.png">
Please set different time of delay for each device - if ESP starts sending data at the same time, you might have problem with parameters, but later I will try to solve this problem.<br>
<br><b>Controllers</b><br>
Create new controller as Generic HTTP<br>
<img src="https://raw.githubusercontent.com/zielu92/smogsensor/master/pictures/screen2.png">
Controller Hostname: - Address of your page with script.<br>
Controller Publish: - URL with data.<br>
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
$timeZone - If your server works in different time zones, just write the difference<br>
$delayOnUpdate - if your internet/server is so slow, you should increase this, but not much.<br>
$differenceBetweenUpdate - if you don't want too much data in your database, you can block it on the period of time<br>
<h2>Extra</h2>
<b>Testing</b>
You can also change controller publish in controller to<br>
<code>
test.php&name=%sysname%&task=%tskname%&valuename=%valname%&value=%value%
</code>
and check output in test.log<br><br>
<b>Index</b><br>
Because I wasn't sure about right indexing. I just provide own formula like that: PM2.5+PM10/2. You can set your own in function file.<br>
<b>Housing</b><br>
You can put it into two elbow PCV pipes, then water will not go inside and air flow can freely.<br>
<b>Bugs</b><br>
You might find a lot of bugs :) You can try to eliminate it or just write to me<br>
<h2>Demo</h2>
<br>
<img src="https://raw.githubusercontent.com/zielu92/smogsensor/master/pictures/screen3.png"><br>
You can check demo <br>
<b><a href="https://mzielinski.pl/smog/">https://mzielinski.pl/smog/</a>

