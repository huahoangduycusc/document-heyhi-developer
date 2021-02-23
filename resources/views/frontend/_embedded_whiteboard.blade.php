<h2 id="embedded-whiteboard">6. Embedded whiteboard</h2>
<p>
Embedded whiteboard allows you to use HeyHi app as a writing pad so you do not need to create your own drawing app.
<br>
Students can submit their work by scanning a QR code on your website using HeyHi app. Then we will send you the result in images format via a webhook call.
</p>
<div class="card">
<div class="card-header">Endpoints</div> 
    <div class="card-body">
        <table class="table">
            <tr>
                <td>POST</td>
                <td>/api/v1/whiteboard</td>
                <td>Create a whiteboard</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>/api/v1/whiteboard/:id</td>
                <td>Delete a whiteboard</td>
            </tr>
        </table>
    </div> 
</div>
<br>
<h4>6.1 Create a whiteboard</h4>
<p>A request to create a whiteboard will need to include <strong>x-api-key</strong> attribute in request header.</p>
<div class="card">
    <div class="card-header">Parameters</div>
    <div class="card-body">
        <ul>
            <li>
                <strong>local_key</strong> <span class="param-desc">string | required</span>
                <p>A local key that will be sent back to your side via webhook call when user submit their drawing
                </p>
            </li>
            <li>
                <strong>expiry_date</strong> <span class="param-desc">integer | optional</span>
                <p>The timestamp (GMT+08) that indicate when the whiteboard will be inaccessible</p>
            </li>
        </ul>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">cURL request</div>
    <div class="card-body">
    <pre>
curl -X POST \
  https://www.heyhi.sg/api/v1/whiteboard \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json' \
  -H 'x-api-key: API_KEY' \
  -d '{
	"local_key":"123456789",
	"expiry_date":"1614073615"
}'
</pre>
    </div>
</div>
<br>

<p>A JSON object will be return with below structure. You can display the QR code link on your website for your users to scan.
</p>
<div class="card">
    <div class="card-header">Return</div>
    <div class="card-body">
        <table class="table">
<pre>
{
  "id": "wb_IzrVE2OJkZsnvV",
  "qrcode_link": "link to QR code image"
}
</pre>
        </table>
    </div>
</div>