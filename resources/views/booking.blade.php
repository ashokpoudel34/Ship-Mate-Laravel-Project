<!DOCTYPE html>
<html>
<body>
    <p>{{ $details['title'] }}</p><br>

    <p>A new booking has been made in the system. Here are the details:</p>
    <p><b>Customer Information:</b></p>
    <ul>
        <li>Name: {{ $details['name'] }}</li>
        <li>Phone: {{ $details['phone'] }}</li>
        <li>Email: {{ $details['email'] }}</li>
    </ul>
    <p><b>Booking Details:</b></p>
    <ul>
        <li>Date and Time: {{ $details['date'] }},{{ $details['time'] }}</li>
        <li>Number of People: {{ $details['people'] }}</li>
    </ul>
    <p><b>Special Requests/Message: </b></p>
    <p>{{ $details['message'] }}</p><br>

    <p>Please ensure that the necessary arrangements are made to accommodate this booking. </p>
    <p>If you have any questions or need further information, please don't hesitate to contact the customer at the provided phone number.</p><br>

    <p>Thank you for your attention to this matter.</p><br>

    <p>Best regards,</p>
    <p>Team ShipMate</p>
    <p>+91 9819819819</p>

</body>
</html>