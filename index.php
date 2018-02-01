<?php
$users = array('admin' => 'secret2018');
$dominio = 'Authorization required';

if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$dominio.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($dominio).'"');
    die('You click on the Cancel button.');
}


// Analizar la variable PHP_AUTH_DIGEST
if (!($datos = analizar_http_digest($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($users[$datos['username']]))
    die('Incorrect credentials');


// Generate a valid reply
$A1 = md5($datos['username'] . ':' . $dominio . ':' . $users[$datos['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$datos['uri']);
$valid_reply = md5($A1.':'.$datos['nonce'].':'.$datos['nc'].':'.$datos['cnonce'].':'.$datos['qop'].':'.$A2);

if ($datos['response'] != $valid_reply)
{
    //die('Credenciales incorrectas');
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$dominio.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($dominio).'"');
		die('You click on the Cancel button');
}
function analizar_http_digest($txt)
{
    // Avod missing data
    $partes_necesarias = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $datos = array();
    $claves = implode('|', array_keys($partes_necesarias));

    preg_match_all('@(' . $claves . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $coincidencias, PREG_SET_ORDER);

    foreach ($coincidencias as $c) {
        $datos[$c[1]] = $c[3] ? $c[3] : $c[4];
        unset($partes_necesarias[$c[1]]);
    }
    return $partes_necesarias ? false : $datos;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="iPayment application for Web, iOS, Android">
        <meta name="author" content="Poeta Digital 2018">
        
        <link rel="shortcut icon" href="./img/favicon.ico">
        <title>iPayment Guides</title>
        <link href="./css/bootstrap-custom.min.css" rel="stylesheet">
        <link href="./css/font-awesome-4.5.0.css" rel="stylesheet">
        <link href="./css/base.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/highlight.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap-3.0.3.min.js"></script>
        <script src="./js/highlight.pack.js"></script> 
    </head>

    <body class="homepage">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- Collapsed navigation -->
        <div class="navbar-header">
            <!-- Expander button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">iPayment Guides</a>
        </div>

        <!-- Expanded navigation -->
        <div class="navbar-collapse collapse">
                <!-- Main navigation -->
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=".">Servers</a>
                    </li>
                    <li >
                        <a href="setup-environment/">Setup Environment</a>
                    </li>
                    <li >
                        <a href="dev-service/">Dev Service</a>
                    </li>
                    <li >
                        <a href="gptool/">GPTool</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schema <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
  <li class="dropdown-submenu">
    <a href="#">Campaign</a>
    <ul class="dropdown-menu">
            
<li >
    <a href="schema/campaigns/schema/">Schema</a>
</li>
    </ul>
  </li>
                        </ul>
                    </li>
                </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#mkdocs_search_modal">
                        <i class="fa fa-search"></i> Search
                    </a>
                </li>
                    <li class="disabled">
                        <a rel="next" >
                            <i class="fa fa-arrow-left"></i> Previous
                        </a>
                    </li>
                    <li >
                        <a rel="prev" href="setup-environment/">
                            Next <i class="fa fa-arrow-right"></i>
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</div>

        <div class="container">
                <div class="col-md-3"><div class="bs-sidebar hidden-print affix well" role="complementary">
    <ul class="nav bs-sidenav">
        <li class="main active"><a href="#welcome-to-ipayment">Welcome to iPayment</a></li>
            <li><a href="#staging">Staging</a></li>
            <li><a href="#production">Production</a></li>
            <li><a href="#devservice">DevService</a></li>
            <li><a href="#postgresql">PostgreSQL</a></li>
    </ul>
</div></div>
                <div class="col-md-9" role="main">

<h1 id="welcome-to-ipayment">Welcome to iPayment</h1>
<h2 id="staging">Staging</h2>
<h2 id="production">Production</h2>
<h2 id="devservice">DevService</h2>
<h2 id="postgresql">PostgreSQL</h2></div>
        </div>

        <footer class="col-md-12">
            <hr>
                <p>01/2018</p>
            <p>Documentation built with <a href="http://www.mkdocs.org/">MkDocs</a>.</p>
        </footer>
        <script>var base_url = '.';</script>
        <script src="./js/base.js"></script>
        <script src="./search/require.js"></script>
        <script src="./search/search.js"></script>

        <div class="modal" id="mkdocs_search_modal" tabindex="-1" role="dialog" aria-labelledby="Search Modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Search</h4>
            </div>
            <div class="modal-body">
                <p>
                    From here you can search these documents. Enter
                    your search terms below.
                </p>
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search..." id="mkdocs-search-query">
                    </div>
                </form>
                <div id="mkdocs-search-results"></div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div><div class="modal" id="mkdocs_keyboard_modal" tabindex="-1" role="dialog" aria-labelledby="Keyboard Shortcuts Modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Keyboard Shortcuts</h4>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 20%;">Keys</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><kbd>?</kbd></td>
                    <td>Open this help</td>
                  </tr>
                  <tr>
                    <td><kbd>&larr;</kbd></td>
                    <td>Previous page</td>
                  </tr>
                  <tr>
                    <td><kbd>&rarr;</kbd></td>
                    <td>Next page</td>
                  </tr>
                  <tr>
                    <td><kbd>s</kbd></td>
                    <td>Search</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


    </body>
</html>

<!--
MkDocs version : 0.17.1
Build Date UTC : 2018-02-01 16:00:17
-->

