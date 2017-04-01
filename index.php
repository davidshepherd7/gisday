<html>
    <body>

        <section>
            <h1> Sessions </h1>
            <?php require 'php/gisday.php'; ?>
        </section>


        <section>
            <h1> Sign Up </h1>

            <form action="/php/submit.php" method="POST">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <button type="submit"> Save </button>
                </div>
            </form>
        </section>

    </body>

    <footer>
        <style>
         form {
             margin: 0 auto;
             width: 460px;
         }

         form div + div {
             margin-top: 1em;
         }

         label {
             display: inline-block;
             width: 150px;
             text-align: left;
         }

         input {
             font: 1em sans-serif;
             width: 300px;
             box-sizing: border-box;
         }

         button {
             float: right;
         }
        </style>
    </footer>
</html>
