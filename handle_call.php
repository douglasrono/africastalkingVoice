##Handling a call

<p>Handling calls made to your Africa’s Talking phone number is as easy as implementing a script on your web server that handles HTTP POST requests.</p>

##Steps Involved In Handling A Call Session
### Here is how it all comes together…
<ol>
  <li>We receive a call to your phone number on our voice gateways, or you successfully initiate a call using our calling API<li/>
  <li>Our API sends a POST request to the notification callback URL that you have set for that phone number in your Voice Dashboard.</li>
  <li>Your application responds with XML that tells our API how to handle the call. This XML will typically contain a list of actions that our API will execute in sequence.</li>
  <li>Our API translates those actions into events or messages relayed back to the caller.</li
</ol>   
    
