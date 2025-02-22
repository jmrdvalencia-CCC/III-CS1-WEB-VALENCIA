<html>
<head>
<style>
    body{
        font-family:san-serif;
        background-color:gray;
        display:flex;
        justify-content:center;
        align-items:center;
        min-height: 100vh;
        margin:0;
    }
    .login-container
    {
        background-color: white;
        padding:30px;
        border-radius:5px;
        box-shadow:  0 2px 5px rgba(0,0,0,,0.1);
        width:300px;

    }

    h2
    {
        text-align:center;
        margin-bottom:5px;
    }

  label{
        display:block;
        margin-bottom:5px;
    }
.inputtext{
width:100%;
padding:10px;
border:1px solid #ccc;
border-radius:3px;
box-sizing:border-box;

}

.SubmitButton
{
 background-color: blue;
 color:white;
 padding: 10px 15px;
 border:none;
 border-radius:3px;
 cursor:pointer;   
}
.SubmitButton:hover
{
background-color:red;
}

    </style>

</head>
<body>
<div class="login-container">
<H2>Login</H2>
<form method="post" action="auth.php">
    <label for="username">Username:</label>
    <input type="text" name='username' id="username" class="inputtext" required>
    
    <label for="Password">Password:</label>
    <input type="password" id="password" name="password" class="inputtext" required/>

<input type="submit" name="submit" value="submit" class="SubmitButton"/>

</div>

</body>


</hmtl>