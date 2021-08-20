Webapp is a social media app which let's users to posts their stories and also comment on posts.
Currently Implemented features are :
+--------+----------+--------------------------+------+------------------------------------------------------------+------------------------------------------+
| Domain | Method   | URI                      | Name | Action                                                     | Middleware                               |
+--------+----------+--------------------------+------+------------------------------------------------------------+------------------------------------------+
|        | GET|HEAD | api/user                 |      | Closure                                                    | api                                      |
|        |          |                          |      |                                                            | App\Http\Middleware\Authenticate:sanctum |
|        | GET|HEAD | sanctum/csrf-cookie      |      | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show | web                                      |
|        | POST     | users/create             |      | App\Http\Controllers\UserController@createUser             | web                                      |
|        | GET|HEAD | users/post/{post}        |      | App\Http\Controllers\PostController@fetchComments          | web                                      |
|        | POST     | users/{user}/post        |      | App\Http\Controllers\PostController@postUser               | web                                      |
|        | GET|HEAD | users/{user}/post        |      | App\Http\Controllers\UserController@fetchPosts             | web                                      |
|        | POST     | users/{user}/post/{post} |      | App\Http\Controllers\CommentsController@Comment            | web                                      |
+--------+----------+--------------------------+------+------------------------------------------------------------+------------------------------------------+
