<?php


use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\Auth\ResetPasswordComponent;
use App\Http\Livewire\Auth\ForgotPasswordComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Auth\ConfirmPasswordComponent;
use App\Http\Livewire\Dashboard\Activites\ActiviteComponent as ActivitesActiviteComponent;
use App\Http\Livewire\Dashboard\Activites\AddComponent;
use App\Http\Livewire\Dashboard\Activites\EditComponent;
use App\Http\Livewire\Dashboard\Administration\User\UserComponent;
use App\Http\Livewire\Dashboard\Administration\Roles\RoleComponent;
use App\Http\Livewire\Dashboard\Hebergement\HebergementComponent;
use App\Http\Livewire\Dashboard\Inscriptions\InscriptionComponent as InscriptionsInscriptionComponent;
use App\Http\Livewire\Dashboard\Paiements\ListePaiementComponent;
use App\Http\Livewire\Site\Activites\ActiviteComponent;
use App\Http\Livewire\Site\Activites\DetailsActiviteComponent;
use App\Http\Livewire\Site\Inscriptions\InscriptionComponent;
use App\Http\Livewire\Site\Inscriptions\ThankYouComponent;
use App\Http\Livewire\Site\Welcome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Welcome::class)->name('welcome');
Route::get('/inscription', InscriptionComponent::class)->name('inscription');
Route::get('/thank-you', ThankYouComponent::class)->name('thank.you');
Route::get('/activites', ActiviteComponent::class)->name('activite');
Route::get('/details-activite/{id}', DetailsActiviteComponent::class)->name('activite-details');




// Route::get('/', WelcomeComponent::class)->name('welcome');

// Toutes les routes pour l'authentification
Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
Route::get('/user/confirmed-password-status', ConfirmPasswordComponent::class)->name('password.confirmation');
Route::get('/forgot-password', ForgotPasswordComponent::class)->name('password.request');
Route::get('/reset-password/{token}', ResetPasswordComponent::class)->name('password.reset');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),  'verified'])->group(function () {

    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');


    Route::prefix('admin')->group(function () {
            Route::get('/liste-inscriptions', InscriptionsInscriptionComponent::class)->name('admininscription');
            Route::get('/listes-paiements', ListePaiementComponent::class)->name('admin.paiement-index');
            Route::get('/listes-hebergement', HebergementComponent::class)->name('admin.heberg-index');

            Route::get('/liste-activites', ActivitesActiviteComponent::class)->name('admin.activite-index');
            Route::get('/ajouter-activite', AddComponent::class)->name('admin.activite-add');
            Route::get('/modifier-activite/{id}', EditComponent::class)->name('admin.activite-edit');

            // Route::get('/listes-slides-accueil', SlideAccueilComponent::class)->name('admin.slideaccueil-index');
            // Route::get('/modification-slides-accueil/{id}', SlideAccueilEditeComponent::class)->name('admin.slideaccueil-edit');
            // Route::get('/ajouter-slides-accueil', SlideAccueilCreateComponent::class)->name('admin.slideaccueil-create');

            // Route::get('/listes-partenaires', PartenaireComponent::class)->name('admin.partenaire-index');
            // Route::get('/modification-partenaire/{id}', PartenaireEditComponent::class)->name('admin.partenaire-edit');
            // Route::get('/ajouter-partenaire', PartenaireCreateComponent::class)->name('admin.partenaire-create');

            // Route::get('/listes-conseils-administration', ConseilAdministrationComponent::class)->name('admin.conseilsadministration-index');
            // Route::get('/modification-conseils-administration/{id}', ConseilAdministrationEditComponent::class)->name('admin.conseilsadministration-edit');
            // Route::get('/ajouter-conseils-administration', ConseilAdministrationCreateComponent::class)->name('admin.conseilsadministration-create');

            // Route::get('/listes-appels-offres', AppelOffreComponent::class)->name('admin.applesoffres-index');
            // Route::get('/modification-appels-offres/{id}', AppelOffreEditComponent::class)->name('admin.applesoffres-edit');
            // Route::get('/ajouter-appels-offres', AppelOffreCreateComponent::class)->name('admin.applesoffres-create');


        });
        Route::prefix('admin-para')->group(function () {

            // Route::get('/listes-societes', SocietesComponent::class)->name('admin.societe-index');
            // Route::get('/modification-societe/{id}', SocietesEditeComponent::class)->name('admin.societe-edit');
            // Route::get('/ajouter-societe', SocietesCreateComponent::class)->name('admin.societe-create');

            // Route::get('/listes-services', ServiceComponent::class)->name('admin.service-index');

            // Route::get('/listes-chiffres', ChiffreComponent::class)->name('admin.chiffre-index');

            // Route::get('/listes-agents-simau', AgentSimauComponent::class)->name('admin.agent-index');

        });
        Route::prefix('admin-log')->group(function () {
            // Route::get('/listes-logements-sociaux', LogementSociauxComponent::class)->name('admin.logementsociaux-index');

            // Route::get('/listes-avantages-offerts', AvantagesOffreComponent::class)->name('admin.avantagesoffert-index');
            // Route::get('/modification-avantages-offerts/{id}', AvantagesOffreEditComponent::class)->name('admin.avantagesoffert-edit');
            // Route::get('/ajouter-avantages-offerts', AvantagesOffreCreateComponent::class)->name('admin.avantagesoffert-create');

            // Route::get('/listes-formulaires-acquisitions', FormulaireAcquisitionComponent::class)->name('admin.formulaireacquisitions-index');
            // Route::get('/modification-formulaire-acquisition/{id}', FormulaireAcquisitionEditComponent::class)->name('admin.formulaireacquisitions-edit');
            // Route::get('/ajouter-formulaire-acquisition', FormulaireAcquisitionCreateComponent::class)->name('admin.formulaireacquisitions-create');

            // Route::get('/listes-typologies-logements', TypologieLogementComponent::class)->name('admin.typologielogement-index');
            // Route::get('/modification-typologie-logement/{id}', TypologieLogementEditeComponent::class)->name('admin.typologielogement-edit');
            // Route::get('/ajouter-typologie-logement', TypologieLogementCreateComponent::class)->name('admin.typologielogement-create');

            // Route::get('/listes-presentations-projets', PresentationProjetComponent::class)->name('admin.presentationprojet-index');
            // Route::get('/modification-presentation-projet/{id}', PresentationProjetEditeComponent::class)->name('admin.presentationprojet-edit');
            // Route::get('/ajouter-presentation-projet', PresentationProjetCreateComponent::class)->name('admin.presentationprojet-create');

            // Route::get('/listes-modes-commercialisations', ModeCommercialisationComponent::class)->name('admin.modecommercialisation-index');
            // Route::get('/modification-mode-commercialisation/{id}', ModeCommercialisationEditeComponent::class)->name('admin.modecommercialisation-edit');
            // Route::get('/ajouter-mode-commercialisation', ModeCommercialisationCreateComponent::class)->name('admin.modecommercialisation-create');

            // Route::get('/listes-envergues-projets', ProgrammeRealisationComponent::class)->name('admin.envergueprojet-index');

        });
        Route::prefix('admin-pre')->group(function () {

            // Route::get('/listes-villes', VilleComponent::class)->name('admin.ville-index');

            // Route::get('/listes-departements', DepartementComponent::class)->name('admin.departement-index');

            // Route::get('/listes-categories-professionnelles', CategorieProfessionnelleComponent::class)->name('admin.categorieprofessionnelle-index');

            // Route::get('/listes-types-pieces', TypePieceComponent::class)->name('admin.typepiece-index');

            // Route::get('/listes-civilites', CiviliteComponent::class)->name('admin.civilite-index');

            // Route::get('/listes-types-logements', TypeLogementComponent::class)->name('admin.typelogement-index');

            // Route::get('/listes-situations-matrimoniales', SituationMatrimonialeComponent::class)->name('admin.situationmatrimoniale-index');

            // Route::get('/listes-genres', GenreComponent::class)->name('admin.genre-index');

            // Route::get('/listes-statuts-demandes', StatutDemandeComponent::class)->name('admin.statutdemande-index');

            // Route::get('/listes-localites', LocaliteComponent::class)->name('admin.localite-index');

            // Route::get('/listes-options-logement', OptionLogementComponent::class)->name('admin.optionlogement-index');

            // Route::get('/listes-demandes', DemandeComponent::class)->name('admin.demande-index');


        });
        Route::prefix('administration')->group(function () {

            Route::get('/listes-utilisateurs', UserComponent::class)->name('admin.user-index');

            Route::get('/listes-roles', RoleComponent::class)->name('admin.role-index');


        });
});


