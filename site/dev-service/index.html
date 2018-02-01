<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Poeta Digital 2018">
        
        <link rel="shortcut icon" href="../img/favicon.ico">
        <title>Dev Service - iPayment Guides</title>
        <link href="../css/bootstrap-custom.min.css" rel="stylesheet">
        <link href="../css/font-awesome-4.5.0.css" rel="stylesheet">
        <link href="../css/base.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/highlight.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap-3.0.3.min.js"></script>
        <script src="../js/highlight.pack.js"></script> 
    </head>

    <body>

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
            <a class="navbar-brand" href="..">iPayment Guides</a>
        </div>

        <!-- Expanded navigation -->
        <div class="navbar-collapse collapse">
                <!-- Main navigation -->
                <ul class="nav navbar-nav">
                    <li >
                        <a href="..">Servers</a>
                    </li>
                    <li >
                        <a href="../setup-environment/">Setup Environment</a>
                    </li>
                    <li class="active">
                        <a href="./">Dev Service</a>
                    </li>
                    <li >
                        <a href="../gptool/">GPTool</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schema <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
  <li class="dropdown-submenu">
    <a href="#">Campaign</a>
    <ul class="dropdown-menu">
            
<li >
    <a href="../schema/campaigns/schema/">Schema</a>
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
                    <li >
                        <a rel="next" href="../setup-environment/">
                            <i class="fa fa-arrow-left"></i> Previous
                        </a>
                    </li>
                    <li >
                        <a rel="prev" href="../gptool/">
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
        <li class="main active"><a href="#dev-service">Dev Service</a></li>
            <li><a href="#core-installations">Core installations</a></li>
            <li><a href="#create-a-database-user-in-postgres">Create a database user in Postgres</a></li>
    </ul>
</div></div>
                <div class="col-md-9" role="main">

<h1 id="dev-service">Dev Service</h1>
<h2 id="core-installations">Core installations</h2>
<p>Generate <code>ssh</code> key for <code>Dev Service</code></p>
<pre><code class="sh">$ ssh-keygen
</code></pre>

<p>Send to iPayment's admin this <code>ssh key</code> created and <code>your_username</code>, <code>password</code></p>
<p>After, iPayment's admin build new <code>DevService Account</code>, please configure <code>rubygems</code> with your <code>credentials</code></p>
<pre><code class="sh">$ gem sources -a 'http://your_username:my_password@git.intranet.pirq.com/gems/'
</code></pre>

<p>Install GpTool</p>
<pre><code class="sh">$ gem install gp_devtools
</code></pre>

<p>Initialize GPTool with your info</p>
<pre><code class="sh">$ gptool self-init -u &lt;your_username&gt; -c ~/Pirq
</code></pre>

<p><code>~/.Pirq</code> can change another path</p>
<h2 id="create-a-database-user-in-postgres">Create a database user in Postgres</h2>
<pre><code class="sh">$ createuser -U postgres -d pirq

$ createdb -U postgres -O pirq pirq_development

$ psql -U postgres -d pirq_development -c &quot;CREATE EXTENSION postgis;&quot;

$ psql -U postgres -d pirq_development -c &quot;GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO pirq;&quot;

$ psql -U postgres -d pirq_development -c &quot;GRANT ALL PRIVILEGES ON ALL FUNCTIONS IN SCHEMA public TO pirq;&quot;

$ psql -U postgres -d pirq_development -c &quot;ALTER VIEW public.geometry_columns OWNER TO pirq;&quot;

$ psql -U postgres -d pirq_development -c &quot;ALTER VIEW public.geography_columns OWNER TO pirq;&quot;
</code></pre></div>
        </div>

        <footer class="col-md-12">
            <hr>
                <p>01/2018</p>
            <p>Documentation built with <a href="http://www.mkdocs.org/">MkDocs</a>.</p>
        </footer>
        <script>var base_url = '..';</script>
        <script src="../js/base.js"></script>
        <script src="../search/require.js"></script>
        <script src="../search/search.js"></script>

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
