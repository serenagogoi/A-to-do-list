<!DOCTYPE html>
<html>
<head>
    <title>To Do List | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
        position: relative;
        width: 100%;
        display: inline-block;
        justify-content: safe center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        background-image: url("todoimage.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 80% 80%;
        background-origin: padding-box;
        min-height: 150px;
        height: 70vh;

  }
    .text h5 {
        margin: 0;
        color: black;
        font-size: 90px;
    }

    .text h6 {
        margin: 0;
        color: black;
        font-size: 30px;
    }

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

h2 {
text-align:center;
}
.center{
position:absolute;
top: 80%;
left:50%;

}
</style>
</head>

<body>
<div class="header">
    <div class="text">
        <h5>TO DO LIST</h5>
        <h6>Plan your way to success!!!</h6>
        
    </div>
</div>

<div>
   <div class="bg"></div>
   <div class="center">
      <button id="myButton" class="float-left submit-button" style="width:auto;">Login</button>
   </div>
</div>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "todolist_login.php";
    };
</script>
</body>
</html>
