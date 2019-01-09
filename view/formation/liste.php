<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formation</title>
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
        
        <script type="text/javascript" src="public/js/jquery.js"></script>
        <script type="text/javascript" src="public/js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //alert("ok");
                /*$("#lieu").append("<option value='1'>Dakar</option>");
                $("#lieu").append("<option value='2'>Fatick</option>");
                $("#lieu").append("<option value='3'>Tamba</option>");*/
                //$("#lieu").empty();
                $.ajax({
                    url:"http://localhost/mesprojets/SamaneAcademy/ajax-lieu?action=liste",
                    type:"get",
                    dataType:"json",
                    success:function(json){
                        $.each(json, function(index, value){
                            //alert(value);
                            $("#lieu").append("<option value='"+index+"'>"+value+"</option>");
                        });
                    }
                });
            });
        </script>

    </head>
    <body>
        <div class="nav navbar navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="formations">Gestion des formations</a></li>
                <li><a href="lieux">Gestion des lieux</a></li>
                <li><a href="map-lieu-formation">Géolocalisation des lieux de formation</a></li>
                <li><a href="login">Deconnexion</a></li>
            </ul>
        </div>

        <form class="form-inline">
            <div class="form-group mx-sm-3">
                <p class="form-control-static">Rechercher</p>
                <select class="form-control" id="r_lieu" name="r_lieu">
                    <option>Choisissez un lieu de formation</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualiser</button>
        </form>
        
        <div class="col-md-6" style="margin-top:15px;">
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des formations</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Identifiant</td>
                            <td>Nom</td>
                            <td>Date de debut</td>
                            <td>Durée</td>
                            <td>Lieu de formation</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulaire de gestion des formations</div>
                <div class="panel-body">
                    <form action="formationController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="id">Identifiant</label>
                            <input class="form-control" type="text" name="id" id="id"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id">Date</label>
                            <input class="form-control" type="date" name="date" id="date"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id">Durée</label>
                            <input class="form-control" type="number" name="duree" id="duree"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="lieu">Lieu</label>
                            <select class="form-control" name="lieu" id="lieu">
                                <option value="">Faites votre choix</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                            <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>