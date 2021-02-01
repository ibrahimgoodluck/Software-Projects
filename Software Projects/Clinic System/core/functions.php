<?php 

function show_errors($errors){
  $display = '<ul class="bg-danger">';
  foreach ($errors as $error) {
    $display .='<li class="text-danger">'.$error.'</li>';
    }
    $display .='</ul>';
    return $display;
}
function permission_error_redirect($url = '../second.php'){
  $_SESSION['error_flash'] = 'You don\'t have permission to access that page!';
  header('Location: '.$url);
}

//cleans user input
function clean($dirty){
  return htmlentities($dirty,ENT_QUOTES,"UTF-8");
}

function login($customer_id){
  $_SESSION['admin'] = $customer_id;
  header('Location: admin/doctors.php');
}

function is_loggedin(){
  if(isset($_SESSION['admin']) && $_SESSION['admin'] >0){
    return true;
  }
  return false;
}
function login_error_redirect(){
  header('Location: ../third.php');
  $_SESSION['error'] = 'You must be logged in to access that page';
}


function login_customer($data){
  $_SESSION['customer'] = $data;
  header('Location: project2.php');
}

function is_loggedin_customer(){
  if(isset($_SESSION['customer']) && $_SESSION['customer'] >0){
    return true;
  }
  return false;
}
function login_error_redirect_customer(){
  header('Location: third.php');
  $_SESSION['error'] = 'You must be logged in to access that module';
}

function login_error_redirect_logout(){
  header('Location: logout.php');
  // $_SESSION['error'] = 'You can not do registration or log in because you have logged in already';
}
function has_permission($permission = 'admin' ){
 global $userdata;
  $permissions = explode(',',$userdata['permission']);
  if (in_array($permission, $permissions,true)){
      return true;
  }
   return false;
}

function login_error_redirect_admin(){
  header('Location:doctor2.php');
  //$_SESSION['error'] = 'You must be logged as an admin  in to access that page';
}