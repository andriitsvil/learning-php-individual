<?php 
echo '<pre>';
print_r($_POST);
class ContactForm
{
  public $form_name;
  public $form_email;
  public function __construct($name, $email){
    $this->form_name = $name;
    $this->form_email = $email;
  }
}
$data = new ContactForm($_POST["name"], $_POST["email"]);
var_dump($data);
echo '</pre>';
?>