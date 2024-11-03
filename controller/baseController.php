<?php
      # tester le code PHP
        // print_r($_POST)
    class User{
        public function form(){
            foreach ($_POST as $key => $value) {
                # condition
                
                !empty($value) ? print "<li class=\"success\">$key : ".htmlspecialchars($value, ENT_QUOTES)."</li>":
                print "<li class=\"warning\">⚠️ Remplir les champs $key</li>";
            }
    
        }
    }

# appeler la fméthode de la classe

$formCTRl = new User();
$formCTRl->form();