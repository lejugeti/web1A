<html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Votre boisson </h1>

        <form method="POST" action="process_form.php">
            <div>
                <label>Nom : </label>
                <input type="text" name="nom"/>
            </div>
            <br>
            <div>
                <label>Prénom : </label>
                <input type="text" name="prenom"/>
            </div>
            <br>
            <div>
                <select multiple="true" name="boisson">
                    <option value="Café">Café </option>
                    <option value="Thé">Thé </option>
                    <option value="Chocolat">Chocolat </option>
                    <option value="Café Crème">Café Crème </option>
                </select>
            </div>
            <br>
            <div>
                <input type="radio" name="sucre" id="sucre" value="Oui"/>
                <label for="sucre">Sucre </label>
                <input type="radio" name="sucre" id="sans_sucre" value="Non"/>
                <label for="sans_sucre">Sans Sucre </label>

            </div>
            <br>

            <input type="submit" value="Submit"/>
            <input type="submit" value="Annuler"/>
        </form>
