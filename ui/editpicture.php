<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .edit-container{
            height: calc(50vh - 50px);
            border: 1px solid black;
        }
    </style>
</head>
    <body>
    
        <div class="edit-container">
            <label for=""></label>
            <div class="edit-content">
                <h1>Create Profile</h1>
                <form action="">
                    <label for="">PROFILE IMAGE</label><br><br>
                    <input type="file" name="image"><br>

                    <label for="">BIO</label><br><br>
                    <textarea name="bioprofile" id="" cols="40" rows="5"></textarea><br><br>

                    <input type="submit" name="picbtn" value="Set Profile">
                </form>
            </div>
        </div>
        
    </body>
</html>