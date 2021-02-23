<h2 id="meeting">4. Meeting</h2>

<p>Meeting is the core concept of HeyHi. You can create a meeting, send invites to attendees, track who have attended the meeting.</p>

<h4>4.1 Create a meeting</h4>
<p>All requests must include above <strong>x-api-key</strong> attribute in request header.</p>

<table class="table">
    <tr>
        <td>Request</td>
        <td>
            POST https://www.heyhi.sg/api/v1/meeting
        </td>
    </tr>
    <tr>
        <td>Parameters</td>
        <td>
            <ul>
                <li>
                    time: string, datetime format ISO 8601
                </li>
                <li>
                    desc: string, name of the meeting
                </li>
                <li>
                    mode: string | Meeting mode takes one of following value CLASSROOM, LECTURE, LECTURE+, LIVESTREAM, WHITEBOARD
                </li>
                <li>
                    email: string | Host email, account for host will be created automatically if does not exist.
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Result</td>
        <td>
            <p>Json string which represents an meeting object</p>
            Example:
            <pre>
{
    "success": true,
    "data": {
        "time": "{{date('Y-m-d H:i:s', time())}}",
        "meetingId": "999131165",
        "token": "xxxxxxxxxx",
        "desc": null,
        "student_link": "https://www.heyhi.sg/app/999131165",
        "host_link": "https://www.heyhi.sg/app/999131165?token=xxxxxxxxxx"
    }
}
            </pre>
        </td>
    </tr>
</table>

<p>Example CURL request</p>
@php
    $timeNow = new DateTime('NOW');
@endphp
<pre>
curl -X POST \
  https://www.heyhi.sg/api/v1/meeting \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json' \
  -H 'x-api-key: API_KEY' \
  -d '{
	"time":"{{$timeNow->format('c')}}",
	"desc":"hello there",
	"email":"hello@heyhi.sg"
}'
</pre>


<h4>4.2 Send an invite</h4>

<p>After create a meeting, you can send and invites to users by their emails.</p>

<p>All requests must include above <strong>x-api-key</strong> attribute in request header.</p>

<table class="table">
    <tr>
        <td>Request</td>
        <td>
            POST https://www.heyhi.sg/api/v1/meeting-attendee
        </td>
    </tr>
    <tr>
        <td>Parameters</td>
        <td>
            <ul>
                <li>
                    meeting_id: string | meetingId return in the previous request
                </li>
                <li>
                    emails: array of email (Ex: ["email1@example.com", "email2@example.com"])
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Result</td>
        <td>
            <p>Json string which represents an attendee object</p>
            Example:
            <pre>
{
    "success": true,
    "data": [
        {
            "id": 1,
            "email": "email@example.com",
            "sent": 1,
            "role": 0
        }
    ]
}
            </pre>
            <legend>Attributes</legend>
            email <small class="text-muted">string</small> <br>
            attendee's email
            <hr>
            sent <small class="text-muted">boolean</small> <br>
            1: Invite was sent, 0: Invite was not sent, you may try to invite again later.
            <hr>
            role <small class="text-muted">boolean</small> <br>
            1: is host, 0: is guest.
        </td>
    </tr>
</table>

<p>Example CURL request</p>
<pre>
curl -X POST \
  https://www.heyhi.sg/api/v1/meeting-attendee \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json' \
  -H 'x-api-key: API_KEY' \
  -d '{
	"meeting_id":"123456789",
	"emails":["email1@example.com", "email2@example.com"]
}'
</pre>

<h4>4.3 Query attendance report</h4>

<p>All requests must include above <strong>x-api-key</strong> attribute in request header.</p>

<table class="table">
    <tr>
        <td>Request</td>
        <td>
            GET https://www.heyhi.sg/api/v1/meeting-session/{meeting_id}
        </td>
    </tr>
    <tr>
        <td>Result</td>
        <td>
            <p>Json string which represents an meeting session object</p>
            Example:
            <pre>
{
    "success": true,
    "data": [
        {
            "display_name": "John",
            "device_info": "Windows,Chrome 88.0.4324.104",
            "time_begin": "{{date('Y-m-d H:i:s', strtotime('-1 hour'))}}",
            "time_end": "{{date('Y-m-d H:i:s', time())}}"
        }
    ]
}
            </pre>
        </td>
    </tr>
</table>

<p>Example CURL request</p>
<pre>
curl -X GET \
  https://www.heyhi.sg/api/v1/meeting-session/{meeting_id} \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json' \
  -H 'x-api-key: API_KEY' \
</pre>
