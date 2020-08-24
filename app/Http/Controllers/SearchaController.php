<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonceur;
use App\Rubrique;
use App\Langue;
use App\Nature;
use App\Version;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;




class SearchaController extends Controller
{

     public function show() 
   
    {
      
       $natures= DB::table('natures')
          ->orderBy('libelle_nature', 'ASC')
          ->get();

        $rubriques= DB::table('rubriques')
          ->orderBy('libelle_rubrique', 'ASC')
          ->get();

       $versions= DB::table('versions')
          ->orderBy('nom', 'ASC')
          ->get();
        $annanceur= DB::table('annonceurs')->get();

        $list_offres_finale = DB::table('annonces')
            ->join('annonceurs', 'annonceurs.code_annonceur', '=', 'annonces.code_annonceur')
            ->join('natures', 'natures.code_nature', '=', 'annonces.code_nature')
            ->join('rubriques', 'rubriques.code_rubrique', '=', 'annonces.code_rubrique')
            ->join('versions', 'versions.id_version', '=', 'annonces.id_version')
            ->where('encours',0)
            ->get();


    return view('superadmin.recherche.archive' , compact('annanceur','natures','rubriques','versions','list_offres_finale'));
  



    }
 

      public function search(Request $request) 
    {
         
          $list_offres = DB::table('annonces')
            ->join('annonceurs', 'annonceurs.code_annonceur', '=', 'annonces.code_annonceur')
            ->join('natures', 'natures.code_nature', '=', 'annonces.code_nature')
            ->join('rubriques', 'rubriques.code_rubrique', '=', 'annonces.code_rubrique')
            ->join('versions', 'versions.id_version', '=', 'annonces.id_version')
            ->where('encours',0);

            if($request->numB != ''){
            $list_offres = $list_offres->where('annonces.num_baosem', 'LIKE', '%'.$request->numB.'%');
          }

          if($request->ananceur_id != ''){
            $list_offres = $list_offres->where('annonceurs.code_annonceur', 'LIKE', '%'.$request->ananceur_id.'%');
          }

           if($request->nature_id != ''){
            $list_offres = $list_offres->where('natures.code_nature', 'LIKE', '%'.$request->nature_id.'%');
          }
          if($request->numA != ''){
            $list_offres = $list_offres->where('annonces.ref_montage', 'LIKE', '%'.$request->numA.'%');
          }

           if($request->titre != ''){
            $list_offres = $list_offres->where('annonces.titre', 'LIKE', '%'.$request->titre.'%');
          }

          if($request->motcles != ''){
            $list_offres = $list_offres->where('annonces.num_insertion', 'LIKE', '%'.$request->motcles.'%');
          }

           if($request->rubrique_id != ''){
            $list_offres = $list_offres->where('rubriques.code_rubrique', 'LIKE', '%'.$request->rubrique_id.'%');
          }

            if($request->type != ''){
            $list_offres = $list_offres->where('versions.id_version', 'LIKE', '%'.$request->type.'%');
          }


           if($request->dateD != null  &&  $request->dateF != null ){
            $list_offres = $list_offres->wherebetween('annonces.date_parution_reel', [$request->dateD,$request->dateF]);
          }

            $list_offres_finale= $list_offres->get();
          
           

        $natures= DB::table('natures')
          ->orderBy('libelle_nature', 'ASC')
          ->get();

        $rubriques= DB::table('rubriques')
          ->orderBy('libelle_rubrique', 'ASC')
          ->get();

       $versions= DB::table('versions')
          ->orderBy('nom', 'ASC')
          ->get();
        $annanceur= DB::table('annonceurs')->get();

       return view('superadmin.recherche.archive' , [
              'list_offres_finale'=>$list_offres_finale,
              'natures'=>$natures,
              'rubriques'=>$rubriques,
              'versions'=>$versions,
              'annanceur'=>$annanceur]);
     
     
}



}
