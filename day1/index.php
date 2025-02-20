<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #f0f0f0; font-family: Arial, sans-serif;">
    <form action="form.php" method="post" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="margin: 10px;">
        <label for="name" style="color: #333;">Name</label>
        <input type="text" name="name" placeholder="Enter name" id="name" style="margin-left:20px; border: 1px solid #ccc; padding: 5px;">
        </div>
        <div style="margin: 10px;">
        <label for="email" style="color: #333;">Email</label>
        <input type="email" name="email" placeholder="Enter email" id="email" style="margin-left:20px; border: 1px solid #ccc; padding: 5px;">
        </div>
        <div style="width: 300px; display: flex; margin: 10px; justify-content: space-between;">
        <label for="adress" style="margin-top: 0; color: #333;">Address</label>
        <textarea name="" id="adress" rows="5" cols="30" style="border: 1px solid #ccc; padding: 5px;"></textarea>
        </div>
        <div style="display: flex; width: 300px; margin-top:20px;">
        <label for="select" style="color: #333;">Country</label>
        <select name="select" id="select" style="width: 150px; margin-left: 15px; border: 1px solid #ccc; padding: 5px;">
             <option value="Egypt">Egy</option>
             <option value="USA">USA</option>
        </select>
        </div>
        <div style="width:300px; margin-top:20px;">
            <label for="gender" style="color: #333;">Gender</label>
            <label for="male" style="margin-left: 15px; color: #333;">Male</label>
            <input type="radio" name="gender" id="male">
            <label for="female" style="color: #333;">Female</label>
            <input type="radio" name="gender" id="female">
        </div>

        <div style="width:350px; display: flex; margin-top:20px;">
            <label for="" style="color: #333;">Courses</label>
            <div style="margin-left: 15px;">
            <label for="mysq" style="color: #333;">
            mysql
            <input type="checkbox" name="mysql" id="mysq"> 
            </label>
            
            <label for="php" style="color: #333;">
            php
            <input type="checkbox" name="php" id="php"> 
            </label>
            <label for="linux" style="color: #333;">
            linux
            <input type="checkbox" name="linux" id="linux"> 
            </label>
            <label for="java" style="color: #333;">
            java
            <input type="checkbox" name="java" id="java"> 
            </label>
            </div>
        </div>

        <div style="margin-top: 20px;">
        <label for="username" style="color: #333;">User Name</label>
        <input type="text" name="name" placeholder="Enter name" id="username" style="margin-left:20px; border: 1px solid #ccc; padding: 5px;">
        </div>
        <div style="margin-top: 20px;">
        <label for="pass" style="color: #333;">Password</label>
        <input type="password" name="password" placeholder="Enter password" id="pass" style="margin-left:35px; border: 1px solid #ccc; padding: 5px;">
        </div>
        <div style="margin-top: 20px;">
        <label for="depary" style="color: #333;">Department</label>
        <input type="text" name="name" placeholder="Department" id="depary" style="margin-left:20px; border: 1px solid #ccc; padding: 5px;">
        </div>

        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px;">Submit</button>
        <button type="reset" style="background-color: #f44336; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px;">Reset</button>
    </form>
</body>
</html>
