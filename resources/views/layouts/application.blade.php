<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Application type: <br> {{$application->applicationType}}<br><br>
Description: <br>{{$application->applicationDescription}}<br><br>
How many pages? <br>{{$application->pageCount}}<br><br>
Page names: <br>{{$application->pageName}}<br><br>
Name: <br>{{$application->name}}<br><br>
Email: <br>{{$application->email}}<br><br>
message: <br>{{$application->message}}<br><br>

Admin Panel? <br> 
{{$application->adminBoolean}}
<br><br>
calendar? <br> 
{{$application->calendarBoolean}}
<br><br>
cart? <br> 
{{$application->cartBoolean}}
<br><br>
chatbox? <br> 
{{$application->chatboxBoolean}}
<br><br>
database? <br> 
{{$application->databaseBoolean}}
<br><br>
geolocation? <br> 
{{$application->geolocationBoolean}}
<br><br>
multilanguage? <br> 
{{$application->multilanguageBoolean}}
<br><br>
login? <br> 
{{$application->loginBoolean}}
<br><br>
media? <br> 
{{$application->mediaBoolean}}
<br><br>
notification? <br> 
{{$application->notificationBoolean}}
<br><br>
payments? <br> 
{{$application->paymentBoolean}}
<br><br>
statistics? <br> 
{{$application->statsBoolean}}
<br><br>
support? <br> 
{{$application->supportBoolean}}
<br><br>
file system? <br> 
{{$application->fileBoolean}}
<br><br>
Users? <br> 
{{$application->userBoolean}}
<br><br>

Finished? <br>
{{$application->finished}}
<br><br>

</body>
</html>