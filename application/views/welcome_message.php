<html>
<head>
    <title>New CodeIgniter project</title>

    <style type="text/css">

    body {
        background-color: #fff;
        margin: 40px;
        font-family: "Lucida Grande", Verdana, Sans-serif;
        font-size: 14px;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 16px;
        font-weight: bold;
        margin: 24px 0 2px 0;
        padding: 5px 0 6px 0;
    }

    h2 {
        color: #444;
        background-color: transparent;
        font-size: 16px;
        margin: 24px 0 2px 0;
        padding: 5px 0 6px 0;
    }

    code {
        font-family: Monaco, Verdana, Sans-serif;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    </style>
</head>
<body>

<h1>Welcome to your new CodeIgniter project!</h1>
<p>You&#39;re just <strong>4 steps</strong> away from starting out your new marvelous project!</p>
<p>Open your favourite editor and edit these file/lines:</p>

<ol>
    <li>
        <h2>application/config/config.php</h2>
        <p>Fill in site URL and session configs.</p>
        <ul>
            <li>
                <p><strong>Base Site URL</strong></p>
                <code>$config[&#39;base_url&#39;] = "http://localhost/&lt;your_project_name&gt;";</code>
            </li>
            <li>
                <p><strong>Encryption key</strong></p>
                <code>$config[&#39;encryption_key&#39;] = "&lt;Put a random 32 char (256 bit) key here&gt;";</code>
                <p>You could use <a href="http://randomkeygen.com/">randomkeygen.com</a>.</p>
            </li>
            <li>
                <p><strong>Session variables</strong></p>
                <code>$config[&#39;sess_cookie_name&#39;] = &#39;&lt;your_project_name&gt;_session&#39;;</code>
            </li>
        </ul>
    </li>
    <li>
        <h2>application/config/database.php</h2>
        <p>Check your database credentials.</p>
        <ul>
            <li>
                <p><strong>Database connectivity settings</strong></p>
                <code>$db[&#39;default&#39;][&#39;database&#39;] = "&lt;your_project_database&gt;";</code>
            </li>

        </ul>
    </li>
    <li>
        <h2>application/config/constants.php</h2>
        <p>Fill in your custom project constants.</p>
        <ul>
            <li>
                <p><strong>Your project constants</strong></p>
                <code>define(&#39;PROJECT_NAME&#39;, &#39;Your Project name&#39;);<br/>
                    define(&#39;PROJECT_DESCRIPTION&#39;, &#39;Another CodeIgniter application&#39;);<br/>
                    define(&#39;PROJECT_VERSION&#39;, &#39;0.1&#39;);<br/>
                    define(&#39;PROJECT_DATE&#39;, &#39;01/01/2010&#39;);</code>
            </li>

        </ul>
    </li>
    <li>
        <h2>Almost done!</h2>
        <p>Now remove application/controllers/welcome.php, application/views/welcome_message.php and start developing!</p>
    </li>
</ol>

<p><br/>Page rendered in {elapsed_time} seconds</p>
<p>This simple custom installation has been brought to you by <em>Fabrizio Codello</em>, follow me on <a href="http://twitter.com/Fabryz">Twitter</a>.</p><br/>

</body>
</html>