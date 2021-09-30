<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>
    <!-- header from partials -->
    <?php require 'partials/header.php'?>

    <div class="container" id="login_container">
        <div class="row">
            <form>
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>
                <div class="form-group password-input">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
                <button class="btn btn-secondary" id="cancel-btn">Annulla</button>
            </form>
        </div>
    </div>

    <div class="container" id="srcBar">
        <div class="row">
            <form action="list.php" method="get">
                <h2>Cosa Cerchi?</h2>

                <input id="articleName" type="text" name="src_bar" class="form-control" placeholder="Input Text here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit">Search</button>

                <button class="btn btn-secondary" id="cancel-btn">Annulla</button>
            </form>
        </div>
    </div>

    <main>
        <h1>
            Pagina non disponibile in questo momento
        </h1>
    </main>

    <?php require 'partials/footer.php'?>

    <?php require 'partials/script.php'?>
</body>

</html>