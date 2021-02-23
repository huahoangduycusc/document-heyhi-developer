<h2 id="sso">5. Single Sign-on</h2>
<p>SSO integration help you to put whiteboard link on your website which allow your users to use HeyHi without creating an additonal account on HeyHi.</p>
<p>Example code:</p>

<ul class="nav nav-tabs code" role="tablist">
    <li>
        <a href="#codePHP" id="codePHP-tab" data-bs-toggle="tab" class="active show" role="tab" aria-controls="php" aria-selected="true">PHP</a>
    </li>
    <li>
        <a href="#codePython3" id="codePython3-tab" data-bs-toggle="tab" role="tab" aria-controls="python" aria-selected="false">Python3</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane active" id="codePHP" role="tabpanel" aria-labelledby="codePHP-tab">
        <pre>
$userID = 1; // Unique ID of your user on your website
$time = time(); // Need to be SGT time (UTC+8)
$partnerID = "PUBLIC_KEY";
$secretKey = "API_KEY"; // Do not share this with anyone
$dataString = $userID.$partnerID.$time; // Concat above data into a data string
$auth = hash_hmac("sha256",$dataString,$secretKey); // Hash data string

$ssoLink = "https://www.heyhi.sg/sso/login?partner_id=$partnerID&tm=$time&user_id=$userID&auth=$auth";
        </pre>
    </div>
    <div class="tab-pane" id="codePython3" role="tabpanel" aria-labelledby="codePython3-tab">
        <pre>
import hashlib
import hmac
import base64
import time

userID = 1 # Unique ID of your user on your website
time = int(time.time()) # Need to be SGT time (UTC+8)
partnerID = "PUBLIC_KEY"

dataString = bytes(str(userID) + partnerID + str(time), 'utf-8') # Concat above data into a data string
secretKey = bytes('API_KEY', 'utf-8') # Do not share this with anyone

auth = hmac.new(secretKey, dataString, digestmod=hashlib.sha256).hexdigest()

ssoLink = "https://www.heyhi.sg/sso/login?partner_id=" + partnerID + "&tm=" + str(time) + "&user_id=" + str(userID) + "&auth=" + auth;
        </pre>
    </div>
</div>