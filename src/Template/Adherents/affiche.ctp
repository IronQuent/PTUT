<?php

<<<<<<< HEAD
echo '<table style="width:100%">
  <tr>
    <th>Nom adhérent</th>
    <th>Prenom adhérent</th>
    <th>Téléphone adhérent</th> 
    <th>Mail adhérent</th>
    <th>Date de naissance</th>
    <th>Handicap de l\'adhérent</th>
    <th>Licence</th>
    <th>Nom de son tuteur</th>
    <th>Adresse tuteur</th>
    <th>Téléphone tuteur</th>
    <th>Mail tuteur</th>
  </tr>';
=======
//Lien pour créer un adhérent
echo '<br>' . $this->Html->link(
        'Créer un adhérent',
        ['controller' => 'Adherents', 'action' => 'add'],
        ['class' => 'button', 'title' => 'Créer un adhérent']
    );
>>>>>>> c960663829c66d8ff16c608493b21dda0ea48d17

foreach ($adherent as $adherents) {
    echo'
    <tr>
        <td>'. $this->Html->link($adherents->nom,['controller' => 'Users', 'action' => 'affiche']).'</td>
        <td>'. $adherents->prenom.'</td>
        <td>'. $adherents->tel.'</td>
        <td>'. $adherents->mail.'</td>
        <td>'. $adherents->dateNaissance.'</td>
        <td>'. $adherents->handicap.'</td>
        <td>'. $adherents->licence.'</td>
    ';
    if($adherents->nomTuteur == null || $adherents->adresseTuteur == null || $adherents->telTuteur == null || $adherents->mailTuteur == null){
        echo'
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
            <td>'. "Pas de tuteur renseigné". '</td>
        ';
    }
    else {
        echo'
            <td>'. $adherents->nomTuteur. '</td>
            <td>'. $adherents->adresseTuteur. '</td>
            <td>'. $adherents->telTuteur. '</td>
            <td>'. $adherents->mailTuteur. '</td>
        ';
    }
    echo'
        <td>'. $this->Html->link('Supprimer',['controller' => 'Adherents', 'action' => 'delete', $adherents->id],
            ['class' => 'button', 'title' => 'Suppression adherent'])
            .$this->Html->link('Modifier',['controller' => 'Adherents', 'action' => 'modif', $adherents->id],
            ['class' => 'button', 'title' => 'Modification adherent']
        ).'</td>        
    </tr>';
}

<<<<<<< HEAD
echo'</table>';

echo $this->Html->link('Retour',['controller'=>'Adherents','action'=> 'add'],['class'=>'button','title'=>'revenir à l\'ajout d\'un adherent']);
=======

//Lien retour
echo '<br>' . $this->Html->link(
        'Retour',
        ['controller' => 'Users', 'action' => 'home'],
        ['class' => 'button', 'title' => 'Retour']
    );

>>>>>>> c960663829c66d8ff16c608493b21dda0ea48d17
