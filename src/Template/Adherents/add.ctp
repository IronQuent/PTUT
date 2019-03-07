<p style="text-align: center;">
    <?php
    echo '<br>' . "Ajouter un nouvel adhérent";
    ?>
</p>

<?php
//formulaire ajout d'un adhérent
echo $this->Form->create($adherent, ['type' => 'file']);
echo $this->Form->control('nom', ['label' => 'Nom de l\'adhérent']);
echo $this->Form->control('prenom', ['label' => 'Prénom de l\'adhérent']);
echo $this->Form->control('tel', ['label' => 'Téléphone de l\'adhérent (Format 0X.XX.XX.XX.XX)', 'type' => 'tel']);
echo $this->Form->control('mail', ['label' => 'Mail de l\'adhérent', 'type' => 'email']);
echo $this->Form->control('dateNaissance', [
    'label' => 'Date de naissance',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),
]);
echo $this->Form->control('handicap', ['label' => 'Handicap de l\'adhérent']);
echo $this->Form->control('licence', ['label' => 'Licence de l\'adhérent']);
echo $this->Form->control('nomTuteur', ['label' => 'Nom du tuteur']);
echo $this->Form->control('adresseTuteur', ['label' => 'Adresse du tuteur']);
echo $this->Form->control('telTuteur', ['label' => 'Téléphone du tuteur (Format 0X.XX.XX.XX.XX)', 'type' => 'tel']);
echo $this->Form->control('mailTuteur', ['label' => 'Mail du tuteur', 'type' => 'email']);
echo $this->Form->control('etablissements._ids',['option' => $etablissements]);
echo $this->Form->button('Ajouter');
echo $this->Form->end();


//Lien retour
echo '<br>'.$this->Html->link(
    'Retour',
    ['controller' => 'Adherents', 'action' => 'affiche'],
    ['class' => 'button', 'title' => 'Retour']
);