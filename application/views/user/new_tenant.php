
<link
    rel="stylesheet"
    type="text/css"
    href="<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/intlTelInput.css">

<script
    type="text/javascript"
src="<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/intlTelInput.js"></script>   
<!-- Code Highlighter for Demo -->
<link
    rel="stylesheet"
    type="text/css"
    href="<?php echo $this->config->item('base_url'); ?>assets/ext/prettify/github.css" rel="stylesheet" />

<!-- Extra CSS Libraries Start -->
<link
    rel="stylesheet"
    type="text/css"
    href="<?php echo $this->config->item('base_url'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
<!-- Extra CSS Libraries End -->
<link
    rel="stylesheet"
    type="text/css"
    href="<?php echo $this->config->item('base_url'); ?>assets/css/style-responsive.css" rel="stylesheet" /> 





<div id="wrapper">
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <div class="row">
                <div class="col-md-12 portlets">
                    <!-- Your awesome content goes here -->
                    <div class="widget animated fadeInDown">
                        <form id="myWizard">
                            <section class="step" data-step-title="Données personnelles">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputUsername">Nom utilisateur</label>
                                            <input type="text" id="inputUsername" placeholder="Nom utilisateur" class="required form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNom">Nom</label>
                                            <input type="text" id="inputNom" placeholder="Nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrenom">Prénom</label>
                                            <input type="text" id="inputPrenom" placeholder="Prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Mot de passe</label>
                                            <input type="password" id="inputPassword" placeholder="Mot de passe" class="required form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputConfirmPassword">Confirmer mot de passe</label>
                                            <input type="password" id="inputConfirmPassword" placeholder="Confirmer mot de passe" class="required form-control">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputEmail">Adresse email</label>
                                            <input type="text" id="inputEmail" placeholder="Adresse email" class="required form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAdress">Adresse</label>
                                            <input type="text" id="inputAdress" placeholder="Adresse" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCity">Ville</label>
                                            <input type="text" id="inputCity" placeholder="Ville" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhoneNumber">Numéro du telephone</label><br>
                                            <input type="tel" id="inputPhoneNumber" placeholder="Numéro du telephone" class="required form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMobileNumber">Numéro du mobile</label><br>
                                            <input type="tel" id="inputMobileNumber" placeholder="Numéro du telephone mobile" class="form-control" >
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="Données du société">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputOccupationSociete">Domaine de travail</label>
                                            <input type="text" id="inputOccupationSociete" placeholder="Domaine de travail" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNomSociete">Nom Société</label>
                                            <input type="text" id="inputNomSociete" placeholder="Nom société" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmailSociete">Adresse email Société</label>
                                            <input type="text" id="inputEmailSociete" placeholder="Adresse email Société" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLinkSociete">Lien Société</label>
                                            <input type="url" id="inputLinkSociete" placeholder="Lien Société" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="notes">
                                            <h4><strong>Example</strong> note</h4>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ol>
                                                <li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Sed diam nonummy nibh euismod tincidunt</li>
                                                <li>Sonsectetuer adipiscing elit</li>
                                                <li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
                                            </ol>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="Les services et les Catégories">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputCategoriename">Nom du catégorie</label>
                                            <input type="text" id="inputCategoriename" placeholder="Nom du catégorie" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputServicename">Nom du service</label>
                                            <input type="text" id="inputServicename" placeholder="Nom du service" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDuration">Duration</label>
                                            <input type="Number" id="inputDuration" placeholder="Duration par minutes" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPrice">Prix du service</label>
                                            <input type="Number" id="inputPrice" placeholder="Prix du service" class="form-control" step="0.01" min="0.01">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="notes">
                                            <h4><strong>Example</strong> note</h4>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ol>
                                                <li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Sed diam nonummy nibh euismod tincidunt</li>
                                                <li>Sonsectetuer adipiscing elit</li>
                                                <li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
                                            </ol>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="Personnel">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPersonnelType" >Type du Personnel</label>
                                            <select name="Type" id="inputPersonnelType" class="required form-control">
                                                <option value="Administrator">Administrateur</option>
                                                <option value="Provider">Exécuteur</option>
                                                <option value="Secretary">Secrétaire</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelUsername">Nom utilisateur</label>
                                            <input type="text" id="inputPersonnelUsername" placeholder="Nom utilisateur" class="required form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPersonnelNom">Nom</label>
                                            <input type="text" id="inputPersonnelNom" placeholder="Nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelPrenom">Prénom</label>
                                            <input type="text" id="inputPersonnelPrenom" placeholder="Prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelPassword">Mot de passe</label>
                                            <input type="password" id="inputPersonnelPassword" placeholder="Mot de passe" class="required form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelConfirmPassword">Confirmer mot de passe</label>
                                            <input type="password" id="inputPersonnelConfirmPassword" placeholder="Confirmer mot de passe" class="required form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="inputPersonnelEmail">Adresse email</label>
                                            <input type="text" id="inputPersonnelEmail" placeholder="Adresse email" class="required form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelAdress">Adresse</label>
                                            <input type="text" id="inputPersonnelAdress" placeholder="Adresse" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelCity">Ville</label>
                                            <input type="text" id="inputPersonnelCity" placeholder="Ville" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelPhoneNumber">Numéro du telephone</label><br>
                                            <input type="tel" id="inputPersonnelPhoneNumber" placeholder="Numéro du telephone" class="required form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPersonnelMobileNumber">Numéro du mobile</label><br>
                                            <input type="tel" id="inputPersonnelMobileNumber" placeholder="Numéro du telephone mobile" class="form-control" >
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    $(document).ready(function () {
                FrontendTenant.initialize(true);


            });
    $("#inputPhoneNumber").intlTelInput({
        nationalMode: true,
        utilsScript: "<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/utils.js", // just for formatting/placeholders etc
        autoPlaceholder: false
    });
    $("#inputMobileNumber").intlTelInput({
        nationalMode: true,
        utilsScript: "<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/utils.js", // just for formatting/placeholders etc
        autoPlaceholder: false
    });
    $("#inputPersonnelMobileNumber").intlTelInput({
        nationalMode: true,
        utilsScript: "<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/utils.js", // just for formatting/placeholders etc
        autoPlaceholder: false
    });
    $("#inputPersonnelPhoneNumber").intlTelInput({
        nationalMode: true,
        utilsScript: "<?php echo $this->config->item('base_url'); ?>assets/ext/intl-tel-input/utils.js", // just for formatting/placeholders etc
        autoPlaceholder: false
    });

</script>

<!-- Demo Specific JS Libraries -->
<script
    type="text/javascript"
src="<?php echo $this->config->item('base_url'); ?>assets/ext/prettify/prettify.js"></script>


<script
    type="text/javascript"
src="<?php echo $this->config->item('base_url'); ?>assets/ext/jquery-wizard/jquery.easyWizard.js"></script>

<script type="text/javascript"
    src="<?php echo $base_url; ?>assets/js/frontend_tenant.js"></script>
<!--<script
    type="text/javascript"
src="<?php echo $this->config->item('base_url'); ?>assets/ext/pages/form-wizard.js"></script>		
 	            -->