
        <form id="contact" name="contact" method="post">

          <fieldset>

            <div class="form-half">

              <label for="name">Name</label>

              <input id="name" require="true" placeholder="Who's there?" name="name" type="text">

            </div>

            <div class="form-half">

              <label for="email">Email</label>

              <input id="email" type="email" required="true" placeholder="user@example.com" name="email" type="text">

            </div>

            <label for="messageBlock">Message</label>

            <textarea id="messageBlock" placeholder="How can I help?" name="message"></textarea>

            <input id="submit" type="submit" value="Submit" name="submit">

          </fieldset>

        </form>

        <div id="success">
          <span>
            <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
          </span>
        </div>

        <div id="error">
          <span>
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </span>
        </div>

    </section>

      <footer>

        <section>

          <p class="copyright">&copy; <?php echo date('Y'); ?> Chris Landtiser</p>

        </section>

      </footer>

    <link async href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-44968630-1', 'auto'); ga('send', 'pageview'); </script>

  </body>
</html>
