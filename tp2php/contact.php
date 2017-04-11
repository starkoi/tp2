<?php
$page_title = 'Page contact';
require_once ('common/defines.php');
require_once ('views/page_top.php');
?>;

<form id="form_resa">
    <fieldset id="client">
        <legend>Client</legend>
        <ul>
            <li>
                <label for="lastname">Nom (*)</label><!--
                            --><input type="text" name="lastname" id="lastname" />
            </li>
            <li>
                <label for="firstname">Prenom (*)</label><!--
                            --><input type="text" name="firstname" id="firstname" />
            </li>
            <li>
                <label for="courriel">Courriel (*)</label><!--
                            --><input type="email" name="courriel" id="courriel" />
            </li>
            <li>
                <label for="telephone">Telephone (*)</label><!--
                            --><input type="tel" name="telephone" id="telephone" />
            </li>
            <li>
                <label for="adresse">Adresse (*)</label><!--
                            --><input type="text" name="adresse" id="adresse" />
            </li>
        </ul>
    </fieldset>
</form>
<?php require_once ('views/page_bottom.php');?>;