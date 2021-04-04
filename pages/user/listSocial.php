<div class="col-md-12">
    <div class="card card-plain">
        <div class="card-header">
            <h4 class="card-title">liste des socials</h4>
            <p class="card-category">voici la liste de tous les socials de votre agence</p>
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
                        $socials = statut('social');
                        foreach ($socials as $social) {
                        ?>
                            <tr>
                                <td>
                                    <?= $social->prenom; ?>
                                </td>
                                <td>
                                    <?= $social->nom; ?>
                                </td>
                                <td>
                                    <?= $social->pseudo; ?>
                                </td>
                                <td class="text-right">
                                    <?php
                                    if ($social->archive == 1) {
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