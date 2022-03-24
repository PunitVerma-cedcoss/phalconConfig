<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    // public function indexAction()
    // {
    //     //return '<h1>Hello!!!</h1>';
    // }
    public function indexAction()
    {
        echo $this->config->get("app")->get("host");
        die();
        session_start();
        if (isset($_SESSION["user"])) {
            header("location:/home");
        }
        // get the post data
        $users = new Users();
        $postData = $this->request->getpost();
        if (isset($postData["email"]) && isset($postData["password"])) {
            echo "<pre>";
            $u = $users::findFirst(
                [
                    'conditions' => 'email = :email: AND password = :password:',
                    'bind' => [
                        'email' => $postData["email"],
                        'password' => $postData["password"],
                    ]
                ]
            );
            // if success getting the data from DB
            if ($u) {
                print_r($u->email);
                print_r($u->password);
                // setting the session up 😃
                session_start();
                $_SESSION["user"] = $u->email;
                header("location:/home");
            } else {
                $this->view->message = "username or password is invalid";
            }
        } else {
            // if data is invalid or not present
            print_r($users->getMessages());
        }
    }
}
