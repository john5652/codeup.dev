<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<body>
<section>
<h2>User Login</h2>
<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Surname</label>
        <input id="username" name="username" type="text" placeholder="enter username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password">
    </p>
    <p>
        <button type="submit">Log in now</button>
    </p>
</form>
</section>

<section>

	<h2>Compose Email</h2>
	<form method="POST" action="/my_first_form.php">
		<p> 
			<input type="email" id="first_and_last_name" name="first_and__last_name" value="" placeholder="First and Last Name">

		</p>


		<p>
			<textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>

		</p>

        <button type"submit">Send Email</button>

        <input type="checkbox" id="mailing_list" value="yes" checked>
        <label for="mailing list">Would you like to save a copy to your sent folder?</label>

</form>
    </section>
    <hr>

    <section>
                    <form method="POST" action="/my_first_form.php">

                    <h2>Multiple Choice Test</h2>
                    <p>How would you rate your experience with our site?</p>

                    <label>
                    <input type="radio" name="q1" value="1">
                    1
                    </label>

                     <label>
                    <input type="radio" name="q1" value="2">
                    2
                    </label>

                     <label>
                    <input type="radio" name="q1" value="3">
                    3
                    </label>

                     <label>
                    <input type="radio" name="q1" value="4">
                    4
                    </label>

                     <label>
                    <input type="radio" name="q1" value="5">
                    5
                    </label>

                    <p>Would you recommend this to your friends?</p>

                    <label>
                        <input type="radio" name="q2" value="yes">
                        yes
                     </label>

                     <label>
                        <input type="radio" name="q2" value="no">
                        no
                     </label>

                     <p>What other sites do you prefer?</p>
                    <label><input type="checkbox" id="os1" name="os[]" value="Google"> Google</label>
                    <label><input type="checkbox" id="os2" name="os[]" value="Yahoo"> Yahoo X</label>
                    <label><input type="checkbox" id="os3" name="os[]" value="Bing"> Bing</label>

                    <label for="os">Testing </label>
                    <select id="os" name="os[]" multiple>
                    <option value="linus">Linux</option>
                    <option value="osx">OS X</option>
                    <option >Windows</option>
                    </select>
                  
                       <p>
                        <button type"submit">Submit</button>
                    </p>

            </section>

            <section>
                <form method="POST" action="/my_first_form.php">
                    <h2>Select Testing</h2>
                    <p>
                        <label for="enjoying">Are you enjoying your day>? </label>
                        <select id="enjoying" name="enjoying">
                        <option value="1">Yes</option>
                        <option selected value="0">No</option>
                        </select>
                    </p>

                    <p>
                        <button type"submit">Submit</button>
                    </p>

                </form>

            </section>
        </body>
        </html>










                  



