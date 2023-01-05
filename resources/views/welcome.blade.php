<!DOCTYPE html>
<html>

<head>
    <title>Join Spartanburg MAGA</title>
    <title>Join the Spartanburg MAGA Community</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <font face="Arial" size=6 color="red">
        <center> <strong>Join the Spartanburg MAGA Community </strong>
    </font>
    <br>
    <font face="Arial" size="3" color="black">Our community is dedicated to re-electing President Trump and pro-MAGA
        politicians.
        <br>Our goal is to have
    </font>
    <font face="Arial" size="3" color="red">
        57 SPARTANBURG DELEGATGES AND 57 ALTERNATE DELEGATES </font>
    <font face="Arial" size="3" color="black">
        for the state convention. </center>
        <BR>There are only <strong> two Republican Party meetings that you must attend </strong> if you want to help
        re-elect President Trump.
        <BR>They are:
        <BR>&nbsp &nbsp &nbsp The Spartanburg Republican Party's <strong> Precinct Reorginazation meeting </strong> in
        March, where we elect our Precinct's Officers and do nothing else.
        <BR>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Each precinct is where we vote. Each precinct must elect a
        president, secretary and executive committee member.
        <BR>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp There were at least 15 precincts where no one showed up at the
        last reorg that was two years ago.
        <BR>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp If your precinct has less than 3 people show up, then one person
        can hold more than one office.
        <BR>&nbsp &nbsp &nbsp In April we hold the second meeting that the state requires. This meeting is <strong>
            where we elect the Spartanburg County Republican Party Officers. </strong>
        <BR>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp At this meeting we elect a county chairman, county vice-chairman,
        a county and a state executive committee member for the county.
    </font>
    <BR>
    <img border="0" src="seal003.png" align="right" width="300" height="300"><br>


    <form action="{{ route('getData') }}" method="POST">
        @csrf
        <font face="Arial" size="3" color="red">
            First Name is required: <input type="text" name="fName" size="50" required
                placeholder="Type your first name here."> <br>
            Last Name is required: <input type="text" name="lName" size="50" required
                placeholder="Type your last name here."><br>
            EMail is required: <input type="text" name="email" size="50" required
                placeholder="A valid email is required to email the petitions to the Joint Chiefs"><br>
        </font>
        <font face="Arial" size="3" color="black">
            Phone: <input type="text" name="phone" size="20" placeholder="Type your home phone number.">&nbsp;
            &nbsp; &nbsp;
            Mobile Phone: <input type="text" name="mobphone" size="20"
                placeholder="Type your mobile phone number."><br>
        </font>
        <font face="Arial" size="3" color="red">
            Your Voting Precinct is required: <input type="text" name="addr1" size="75" required
                placeholder="Type where you vote here."><br>
        </font>
        <font face="Arial" size="3" color="black">
            Address Line 2: <input type="text" name="addr2" size="75"
                placeholder="Type a second line of street address here."><br>
            City: <input type="text" name="city" size="50" placeholder="Type your city here."> &nbsp; &nbsp;
            &nbsp;
            State's Abbreviation: <input type="text" name="state" size="2" placeholder="abbreviate"><br>
            Country: <input type="text" name="country" size="25" placeholder="Type your country here."> &nbsp;
            &nbsp; &nbsp;
            Zip Code: <input type="text" name="zip" size="10" placeholder="Type zip here."><br>
        </font>
        <BR>

        <BR>If you want to hold an office or want to help other MAGA patriots in any way, please tell us here.
        <br>Let us know in this text box:

        <br>
        <textarea name="help" cols="100" rows="5"> </textarea>
        <br><br>
        <center>
            <font face="Arial" size="3" color="red"><STRONG>
                    WELCOME TO THE SPARTANBURG MAGA COMMUNITY!
                </STRONG></font>
            <font face="Arial" size="3" color="red">
                <BR><br> <button type="submit" name="B1"> JOIN SPARTANBURG MAGA</button> &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                <input type="reset" value="RESET" name="B2">
        </center>
        </font>
    </form>
    <HR>
    <br>
    <!--
    The code must implemented below the tags.
-->
    {{-- <script type="text/javascript">
        const form = document.getElementById('my-form');
        form.addEventListener('submit', sendEmail);

        function sendEmail(event) {
            event.preventDefault();
            var fName = document.getElementsByName("fName")[0].value;
            var lName = document.getElementsByName("lName")[0].value;
            var addr1 = document.getElementsByName("addr1")[0].value;
            var addr2 = document.getElementsByName("addr2")[0].value;
            var city = document.getElementsByName("city")[0].value;
            var state = document.getElementsByName("state")[0].value;
            var country = document.getElementsByName("country")[0].value;
            var zip = document.getElementsByName("zip")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var phone = document.getElementsByName("phone")[0].value;
            var mobphone = document.getElementsByName("mobphone")[0].value;
            var help = document.getElementsByName("help")[0].value;

            $.get("db.php", {
                    fName: fName,
                    lName: lName,
                    addr1: addr1,
                    addr2: addr2,
                    city: city,
                    state: state,
                    country: country,
                    zip: zip,
                    email: email,
                    phone: phone,
                    mobphone: mobphone,
                    help: help
                },
                function(data, status) {
                    console.log(data);
                    //alert("Data: " + data + "\nStatus: " + status);
                });

            var myHost = "mail.SpartanburgMAGA.com";
            var myUsername = "BillBledsoe@SpartanburgMAGA.com";
            var myPassword = "Gpopogund1776";

            //	  var myTo = "BillBledsoe@SpartanburgMAGA.com" ;
            var myTo = "BillBledsoe@SpartanburgMAGA.com";
            var myFrom = email;

            var patriotInfo = "   "
            patriotInfo = "<strong>From:</strong> <br> " + fName + " " + lName + "<br>" + email + "<br>" + addr1 + ", " +
                addr2 + ", " + city + ", " + state + ", " + country + "  " + zip + "<br>" + phone + "<br>" + mobphone +
                "<br>" + help + "<br>";

            var emailedTo =
                "<br> <br> You have successfully sent an email to BillBledsoe@SpartanburgMAGA.com and a confirmation email to yourself. <br><br><br><br>"

            var myBody = "  "
            myBody =
                "<center><h2>Congratulations, you are now a member of the most powerful shakers and movers team in Spartanburg. </h2> </center> We are dedicated to <strong> MAKING AMERICA GREAT AGAIN  </strong> and to finding leaders who will always put <strong> AMERICA FIRST.</strong>  <BR><BR>We are the last line of defense. We are dedicated to serving God, to saving our families, our state, and our country.  <BR><BR> We respect our elected politicians but we will always hold them accountable.  If they refuse to back our conservative values, President Trump, or his allies, we will replace them. <BR><BR><BR><BR> <center> <h4> Welcome to the Spartanburg MAGA - Putting AMERICA FIRST is to put God, defending our families, and defending our country first. <BR> Email to BillBledsoe@SpartanburgMAGA.com. </h4></center><strong><center> CONGRATULATIONS </center></strong> <br> <HR>"

            myBody = patriotInfo + myBody;

            document.write(
                "<strong> <center> CONGRATULATIONS <BR> You have joined the Spartanburg MAKE AMERICA GREAT AGAIN TEAM. <br> </center></strong> <br> <HR>"
                );
            document.write(myBody);

            function wait(ms) {
                var d = new Date();
                var d2 = null;
                do {
                    d2 = new Date();
                }
                while (d2 - d < ms);
            }

            myBody = myBody + emailedTo;

            // #1 this is to BillBledsoe@SpartanburgMAGA.com
            var mySubject = "To - Bill Bledsoe from ";
            mySubject = mySubject + "SpartanburgMAGA.com";
            myTo = "BillBledsoe@SpartanburgMAGA.com";
            myFrom = "BillBledsoe@SpartanburgMAGA.com";
            Email.send({
                Host: myHost,
                Username: myUsername,
                Password: myPassword,
                To: myTo,
                From: myFrom,
                Subject: mySubject,
                Body: myBody,
            }).then(function(message) {
                console.log(message)
            });
            wait(10);
            document.write("You have successfully sent an email to BillBledsoe@SpartanburgMAGA.com.<br>");


            // #11 this is to the patriot that filled out the form
            mySubject = "Thank you for joining the Spartanburg MAGA Team: "
            mySubject = mySubject + fName + " " + lName;
            Email.send({
                Host: myHost,
                Username: myUsername,
                Password: myPassword,
                To: myFrom,
                From: myUsername,
                Subject: mySubject,
                Body: myBody,
            }).then(function(message) {
                console.log(message)
            });
            document.write("You have successfully sent a confirmation email to your email address. <br><br><br>");


        }
    </script> --}}

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- hitwebcounter Code START -->
    <a href="https://www.hitwebcounter.com" target="_blank">
        <img src="https://hitwebcounter.com/counter/counter.php?page=7842175&style=0007&nbdigits=9&type=page&initCount=0"
            title="Free Counter" Alt="web counter" border="0" /></a>

</body>

</html>
