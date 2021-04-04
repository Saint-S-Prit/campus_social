<div class="col-md-12">
    <div class="card card-plain">
        <div class="card-header">
            <h4 class="card-title">liste des comptables</h4>
            <p class="card-category">voici la liste de tous les comptables de votre agence</p>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Prenom
                        </th>
                        <th>
                            Nom
                        </th>
                        <th>
                            pseudo
                        </th>
                        <th class="text-right">
                            Etat
                        </th>
                    </thead>
                    <tbody>


                        <?php
                        $comptables = statut('comptable');
                        foreach ($comptables as $comptable) {
                        ?>
                            <tr>
                                <td>
                                    <?= $comptable->prenom; ?>
                                </td>
                                <td>
                                    <?= $comptable->nom; ?>
                                </td>
                                <td>
                                    <?= $comptable->pseudo; ?>
                                </td>
                                <td class="text-right">
                                    <?php
                                    if ($comptable->archive == 1) {
                                        echo "<p style=color:green> Actif</p>";
                                    } else {
                                        echo "<p style=color:red> Inactif</p>";
                                    }
                                    ?>
                                </td>
                            </tr>

                        <?php
                        }



                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>