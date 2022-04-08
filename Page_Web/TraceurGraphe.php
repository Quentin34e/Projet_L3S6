<?php 

require ('bd.php');
$bdd = getBD();

$region = $_GET['region'];

//Requete pour les femmes pour tracer la courbe
$sql_annees = "SELECT DISTINCT(population.annee)
		FROM pays, population
		WHERE pays.intitulé=? AND pays.idP=population.idP ORDER BY annee ASC;";
$statement_annees = $bdd->prepare($sql_annees);
$statement_annees->execute([$region]) or die(print_r($statement_annees->errorInfo(), true));
$annees = array();
while($r_annee = $statement_annees->fetch()){ //le while permet de changer les valeurs de l'axe des abcisses par nos valeurs de la bd
	array_push($annees, $r_annee[0]);  
}
//Meme requete mais pour les hommes
$sql_homme ="SELECT population.taux
		FROM pays, population
		WHERE pays.intitulé=? AND pays.idP=population.idP
		AND population.Sexe='MEN'" ; 
$statement_homme = $bdd->prepare($sql_homme);
$statement_homme->execute([$region])  or die(print_r($statement_homme->errorInfo(), true));
$tableH = array();
while($r_taux = $statement_homme->fetch()){
	array_push($tableH, $r_taux[0]); 
}


$sql_femme ="SELECT population.taux
		FROM pays, population
		WHERE pays.intitulé=? AND pays.idP=population.idP
		AND population.Sexe='WOMEN'" ; 
$statement_femme = $bdd->prepare($sql_femme);
$statement_femme->execute([$region]) or die(print_r($statement_femme->errorInfo(), true));
$tableF = array();
while($r_taux_femme = $statement_femme->fetch()){
	array_push($tableF, $r_taux_femme[0]); 
}

		//content="text/plain; charset=utf-8"
		require_once ('../jpgraph/jpgraph/src/jpgraph.php'); 
		require_once ('../jpgraph/jpgraph/src/jpgraph_line.php');

		$datay1 = $tableH; //cela correspond aux lignes sur le graphe elle prend un tableau en entrée
		$datay2 = $tableF; 
		// Setup the graph
		$graph = new Graph(900,500);
		$graph->SetScale("textlin");

		$theme_class=new UniversalTheme;

		$graph->SetTheme($theme_class);
		$graph->img->SetAntiAliasing(false);
		$graph->title->Set('Evolution du taux de fumeurs chez les hommes en '.$region.' et les femmes en fonction du temps'); //titre du graphe
		$graph->SetBox(false);

		$graph->SetMargin(40,20,36,63); //positionnement du graphe

		$graph->img->SetAntiAliasing();

		$graph->yaxis->HideZeroLabel(); 
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

		$graph->xgrid->Show();
		$graph->xgrid->SetLineStyle("solid");
		$graph->xaxis->SetTickLabels($annees); 
		$graph->xgrid->SetColor('#E3E3E3');

		// Create the first line
		$p1 = new LinePlot($datay1);
		$graph->Add($p1);
		$p1->SetColor("#6495ED");
		$p1->SetLegend('Taux Hommes');

		// Create the second line
		$p2 = new LinePlot($datay2);
		$graph->Add($p2);
		$p2->SetColor("#B22222");
		$p2->SetLegend('Taux Femmes');

		$graph->legend->SetFrameWeight(1);

		// Output line
		$graph->Stroke();
		
	?>