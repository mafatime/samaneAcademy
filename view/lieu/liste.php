<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formation</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <script type="text/javascript" scr="public/js/jquery.js"></script>
    <script type="text/javascript" scr="public/js/jquery-ui.js"></script>
    <script type="text/javascript">

       $(document).ready(function(){
           alert("ok");
       });
    </script>
</head>
<body>
    <div class="nav navbar navbar-inverse">
        <ul class="nav navbar-nav">-
            <li><a href="formation">Gestion des formations</a></li>
            <li><a href="lieux">Gestion des lieux</a></li>
            <li><a href="map-lieu-formation">Géolocalisation des lieux de formation</a></li>
            <li><a href="login" style='position:right'>Deconnection</a></li>
        </ul>
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Liste des lieux</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Identifiant</td>
                        <td>Nom</td>
                        <td>Lattitude</td>
                        <td>Longitude</td>
                     </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panal panel-primary">
            <div class="panel-heading">Formulaire de gestion des lieux</div>
            <div class="panel-body">
                <form   method="POST" action="lieuController">

                    <div class="form-group">
                        <label for="id">Identifiant</label>
                        <input type="text" name="id" id="id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="id">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="id">Lattitude</label>
                        <input type="text" name="lattitude" id="lattitude" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="id">Longitude</label>
                        <input type="number" name="longitude" id="longitude" class="form-control">
                    </div>

                    <div class="form-group">
                            <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                    </div>

                </form>
            </div>
        </div>
    <div>

</body>
</html>