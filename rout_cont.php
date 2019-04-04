<?php
/*
//basic routes
Route::get('/', function() {
    return view('Welcome');
});

Route::get('about', function() {
    return view('Welcome');
});

// Route verbs
Route::post('/', function(){});

Route::put('/', function(){});

Route::delete('/', function(){});

Route::any('/', function(){});

Route::match(['get', 'post'], '/', function(){});

// Route parameters
Route::get('users/{id}/friends', function ($id){
    //
});

//Basic route naming conventions
Route::get('members/{id}', [
    'as' => 'members.show',
    'uses' => 'MembersController@show'
]);

// Restricting a group of routes to logged in users only
Route::get('dashboard', function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    });
    Route::get('account', function(){
        return view('account');
    });
});
*/
/*
//REVISION OF FUNCTIONS AND OBJECTS
echo strrev(" .dlrow olleH");

// Defining a function
function function_name([parameter [, ...]])
{
    //statement
}
//Objects
$object -> property
$object -> method()

// creating a constructor method
class User
{
    function User($param1, $param2)
    {
        //Constructor statements go here
        public $username = "Guest";
    }
}

// creating a destructor method
class User
{
    function __destruct()
    {
        // Destructor code goes here
    }
}

//use of the this key word
*/
/*
class User1
{
    public $name, $password;
    
    function get_password()
    {
        return $this -> password;
    }
}

$object1 = new User1;
$object1 -> password = "secret";
echo $object1-> get_password();

// creating and accessing a static method

User2::pwd_string();

class User2
{
    static function pwd_string()
    {
        echo "Please enter your password";
    }
}
*/

/*
$object = new Subscriber;
$object->name = "Byamugisha";
$object->password = "pword";
$object->phone = "0779756164";
$object->email = "byamu@gmail.com";
$object->display();

class User
{
    public $name, $password;
    
    function save_user()
    {
        echo "Save User code goes here";
    }
}

class Subscriber extends User
{
    public $phone, $email;

    function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Pass: " . $this->phone . "<br>";
        echo "Pass: " . $this->email;
    }
}
*/

// my own trial of inheritance

$user1 = new Admin();
$user1->name = "Ambrose";
$user1->password = "pw123";
$user1->role = "admin";
$user1->delete_users();

$user2 = new Client();
$user2->name = "Ambrose";
$user2->password = NULL;
$user2->view = True;
$user2->view_stuff();



class User
{
    public $name, $password;
    
    function save_user()
    {
        echo "Save User code goes here";
    }
}


class Admin extends User
{
    public $role;

    function delete_users(){
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Pass: " . $this->role . "<br>";
        echo "I can delete users";
    }
}

class Client extends User
{
    public $view;

    function view_stuff(){
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Pass: " . $this->view . "<br>";
        echo "I can see views";
    }
}
?>
