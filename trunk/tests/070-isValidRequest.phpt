--TEST--
Services_Facebook::isValidRequest()
--POST--
fb_sig_in_canvas=1&fb_sig_time=1188760050.9075&fb_sig_user=669245952&fb_sig_profile_update_time=1180545711&fb_sig_session_key=ebeeab1ee8f3c7d2121f9134-669245952&fb_sig_expires=0&fb_sig_friends=1213017,1213918,2041061,2222905,2244692,2259785,2347953,7907485,8401552,10100090,13901499,14229681,22402440,22407997,22408176,22408434,24403233,25706847,30300775,30301284,30301349,30302438,30303230,30303717,30304256,30304476,30304554,30305202,30306612,30307334,30308333,30308490,30317434,31108580,31602557,36900640,55700629,60100635,500013954,500014674,500028805,500047068,500064183,500262277,500330893,502315838,503218301,505869088,506788940,507615356,507849704,508087248,508135353,510895546,511618270,514322953,515180433,515853053,519690552,534641176,535346040,536269226,540337396,559254072,562876253,569461369,578822015,604800350,608617223,609143784,652965146,660524972,668355855,668947253,673235384,673474250,686002212,686252440,687199866,690546058,690931330,694775956,696685248,704435992,709320825,712387454,733796433,737610532,781000028,832205013,855010639,883580353,898930299,902135275&fb_sig_api_key=e7a775bacf1ddee36c3dd543fc0e4096&fb_sig_added=1&fb_sig=d5521d53e8d65f1975054b4314bda4e4
--FILE--
<?php

require_once 'tests-config.php';
$api->sessionKey = $sessionKey;
var_dump(Services_Facebook::isValidRequest($_POST));

?>
--EXPECT--
bool(true)
